document.addEventListener('DOMContentLoaded', function () {


  const dashboardlink =  document.getElementById('dashboard');
  const postRequestsLink = document.getElementById('postreq');
  const viewRequestsBtn = document.getElementById('viewRequestsBtn');
  const approvedPostsLink = document.getElementById('approvedpost');
  const viewapprovedBtn = document.getElementById('viewApprovedBtn');
  const adoptReviewLink = document.getElementById('adoptreview');
  const viewReviewBtn = document.getElementById('viewReviewBtn')
  const adoptApprovedLink = document.getElementById('adoptapproved')
  const viewAdoptbtn = document.getElementById('viewAdoptbtn');
  if (dashboardlink){
    postRequestsLink.addEventListener('click', function (e) {
      e.preventDefault();
      console.log("Redirecting to /admin/dashboard");
      window.location.href = "/admin/dashboard";
    });
  }

  if (postRequestsLink) {
    postRequestsLink.addEventListener('click', function (e) {
      e.preventDefault();
      console.log("Redirecting to /admin/postreq");
      window.location.href = "/admin/postreq";
    });
  }

  if (viewRequestsBtn) {
    viewRequestsBtn.addEventListener('click', function (e) {
      e.preventDefault();
      console.log(" Redirecting to /admin/postreq");
      window.location.href = "/admin/postreq";
    });
  }

  if (approvedPostsLink){
    approvedPostsLink.addEventListener('click', function (e) {
      e.preventDefault();
      console.log("Redirecting to /admin/postapprovred");
      window.location.href = "/admin/postapproved";
    });
  }

if (viewapprovedBtn){
    viewapprovedBtn.addEventListener('click', function (e) {
      e.preventDefault();
      console.log("Redirecting to /admin/postapproved");
      window.location.href = "/admin/postapproved";
    });
  }

  if (adoptReviewLink){
    adoptReviewLink.addEventListener('click', function (e) {
      e.preventDefault();
      console.log("Redirecting to /admin/adoptionreview");
      window.location.href = "/admin/adoptionreview";
    });
  }

  if (viewReviewBtn){
    viewReviewBtn.addEventListener('click', function (e) {
      e.preventDefault();
      console.log("Redirecting to /admin/adoptionreview");
      window.location.href = "/admin/adoptionreview";
    });
  }
  if (adoptApprovedLink){
    adoptApprovedLink.addEventListener('click', function (e) {
      e.preventDefault();
      console.log("Redirecting to /admin/adoptionapproved");
      window.location.href = "/admin/adoptionapproved";
    });
  }
  if (viewAdoptbtn){
    viewAdoptbtn.addEventListener('click', function (e) {
      e.preventDefault();
      console.log("Redirecting to /admin/adoptapproved");
      window.location.href = "/admin/adoptionapproved";
    }); 
  }

});


