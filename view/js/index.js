const products = [
  { id: 1, img: "https://static.wixstatic.com/media/94e66f_369ba69efe004a85b6ed680383d81b0e~mv2_d_1500_1500_s_2.png/v1/fill/w_273,h_273,al_c,q_85,usm_0.66_1.00_0.01,enc_auto/94e66f_369ba69efe004a85b6ed680383d81b0e~mv2_d_1500_1500_s_2.png" },
  { id: 5, img: "https://static.wixstatic.com/media/94e66f_80b826bbaccd461398f595df03476b57~mv2_d_1500_1500_s_2.png/v1/fill/w_229,h_229,al_c,q_85,usm_0.66_1.00_0.01,enc_auto/94e66f_80b826bbaccd461398f595df03476b57~mv2_d_1500_1500_s_2.png" },
  { id: 5, img: "https://static.wixstatic.com/media/94e66f_56e0d5db89a74dbcb3ba2896c67bbc8e~mv2_d_1500_1500_s_2.png/v1/fill/w_273,h_273,al_c,q_85,usm_0.66_1.00_0.01,enc_auto/94e66f_56e0d5db89a74dbcb3ba2896c67bbc8e~mv2_d_1500_1500_s_2.png" },
  { id: 5, img: "https://static.wixstatic.com/media/94e66f_29e92c46a4304ec99fbc2371ff35ca64~mv2_d_1500_1500_s_2.png/v1/fill/w_180,h_180,al_c,q_85,usm_0.66_1.00_0.01,enc_auto/94e66f_29e92c46a4304ec99fbc2371ff35ca64~mv2_d_1500_1500_s_2.png" },
];


document.addEventListener("DOMContentLoaded", () => {
  loadProducts();
})



function loadProducts() {
  const carousel = document.querySelector('.products');
  products.forEach((product, index) => {
    const { id, img } = product;
    carousel.innerHTML += `
      <div class="product my-3">
        <img
          src="${img}"
          alt="product" height="180">
        <p class="my-2">Producto</p>
        <p class="my-2">$80.000</p>
      </div>
    `;
  })
}