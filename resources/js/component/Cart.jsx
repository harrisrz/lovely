import React , {useState, useEffect} from "react";
import ReactDOM from "react-dom";
import axios from "axios";
import Swal from 'sweetalert';

const Cart = () => {
    const [carts,setCarts] = useState([]);
    const [totalCart,setTotal] = useState(0);
    const [loading, setLoading] = useState(true);

    useEffect(() => {
        axios.get("carts").then(res => {
            if (res.status === 200) {
                setCarts(Object.values(res.data.carts));
                setTotal(res.data.cart_total);
            }
            setLoading(false);
        });
    }, []);

    const updateCart = (quantity, cartId) => {
      axios.put(`carts/${cartId}`, {quantity}).then(res => {
        if(res.status === 200){
            setCarts(Object.values(res.data.carts));
            setTotal(res.data.cart_total);
            swal('Success', res.data.message, "success");
        }
      });  
    };

    const deleteCart = (cartId) => {
        axios.delete(`carts/${cartId}`).then(res => {
            if(res.status === 200) {
                setCarts(carts.filter(cart => cart.id !== cartId))
                setTotal(res.data.cart_total);
                swal('Success', res.data.message, "success");
            }
        });
    };

    return loading ? (
        <h3>Loading....</h3>
        ) : ( 
            <>
            <div className="row">
                <div className="col-lg-12">
                    <div className="shoping__cart__table">
                        <table>
                            <thead>
                                <tr>
                                    <th className="shoping__product">Products</th>
                                    <th>Price</th>
                                    <th>Quantity</th>
                                    <th>Total</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                {
                                carts.length === 0 ? <tr>
                                    <td colSpan={7}>
                                        Cart is Empty <a href="/home" className="btn btn-love">Go Shopping</a>
                                    </td>
                                </tr> : (
                                carts.map((cart,index) =>{
                                    return (
                                    <tr key={cart.id}>
                                    <td className="shoping__cart__item">
                                        <img width={80} src={cart.associatedModel.media[0].original_url} alt={cart.name} />
                                        <h5>{cart.name}</h5>
                                    </td>
                                    <td className="shoping__cart__price">
                                        Rp. {cart.price}
                                    </td>
                                    <td className="shoping__cart__quantity">
                                        <div className="quantity">
                                            <div className="pro-qty">
                                                <select 
                                                className="form-control"
                                                value={cart.quantity} onChange={(e) => updateCart(e.target.value, cart.id)}>
                                                    {[
                                                        ...Array(cart.associatedModel.quantity).keys()
                                                    ].map(x => {
                                                        return <option value={x + 1} key={x + 1}>{x + 1}</option>
                                                    })}
                                                </select>
                                            </div>
                                        </div>
                                    </td>
                                    <td className="shoping__cart__total">
                                        Rp. {cart.price * cart.quantity}
                                    </td>
                                    <td className="shoping__cart__item__close">
                                        <span className="icon_close" onClick={() => deleteCart(cart.id)}></span>
                                    </td>
                                </tr>
                                );
                                }))};
                                
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div className="row">
                <div className="col-lg-12">
                    <div className="shoping__cart__btns">
                        <a href="/home" className="love-btn cart-btn">CONTINUE SHOPPING</a>
                    </div>
                </div>
                {/* <div className="col-lg-6">
                    <div className="shoping__continue">
                        <div className="shoping__discount">
                            <h5>Discount Codes</h5>
                            <form action="#">
                                <input type="text" placeholder="Enter your coupon code" readOnly />
                                <button type="submit" className="site-btn">APPLY COUPON</button>
                            </form>
                        </div>
                    </div>
                </div> */}
                <div className="col-lg-6">
                    <div className="shoping__checkout">
                        <h5>Cart Total</h5>
                        <ul>
                            <li>Subtotal <span>Rp. {totalCart}</span></li>
                            <li>Total <span>Rp. {totalCart}</span></li>
                        </ul>
                        <a href="/order/checkout" className="primary-btn">PROCEED TO CHECKOUT</a>
                    </div>
                </div>
            </div>
        </>
    );
};


export default Cart;

if (document.getElementById('cart')) {
    ReactDOM.render(<Cart />, document.getElementById('cart'));
}
