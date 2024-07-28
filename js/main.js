const searchBox = document.querySelector('.header-search');
if (searchBox) {
	const searchBoxIcon = document.querySelector('.header-search-icon');
	searchBoxIcon.addEventListener('click', () => {
		searchBox.classList.toggle('active');
	})
}
// play video by click
var videos = document.querySelectorAll('video');
for (let i = 0; i < videos.length; i++) {
	videos[i].addEventListener('click', function () {
		if (videos[i].paused == true) {
			videos[i].play();
			videos[i].firstChild.nodeValue = 'Play';
		} else {
			videos[i].pause();
			videos[i].firstChild.nodeValue = 'Pause';
		}
	});
}




const mobileMenu = document.querySelector('.mobile-menu');
if (mobileMenu) {
	const menuIcon = document.querySelector('.menu-icon');
	const menuIconClose = document.querySelector('.menu-icon-close');
	menuIcon.addEventListener('click', () => {
		mobileMenu.classList.toggle('active');
	})
	menuIconClose.addEventListener('click', () => {
		mobileMenu.classList.toggle('active');
	})
}
const owlPosts = document.querySelector('.owl-posts');
if (owlPosts) {
	setTimeout(() => {
		const owlPostsHeight = owlPosts.clientHeight;
		const postsRelation1 = document.querySelector('.posts-relation1');
		postsRelation1.style.height = `${owlPostsHeight}px`;
	}, 2000);
}



