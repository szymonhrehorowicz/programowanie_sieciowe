function commentReference(element) {
  const comments_form_id = 'comments_form';
  const comments_form_reference_id = 'comments_form_reference';

  const targetEl = document.getElementById(comments_form_id);
  if (targetEl) {
    targetEl.scrollIntoView({behavior: 'smooth', block: 'start'});
  } else {
    return
  }

  comment_id = element.dataset.comment_id
  if (comment_id) {
    const comments_form_reference =
        document.getElementById(comments_form_reference_id);
  }
  else {return }

  comments_form_reference.value = comment_id;

  const comments = document.getElementsByClassName('comment');
  for (let i = 0; i < comments.length; i++) {
    if (comments[i].classList.contains('comment_referenced')) {
      comments[i].classList.remove('comment_referenced');
      break;
    }
  }

  for (let i = 0; i < comments.length; i++) {
    if (comments[i].dataset.comment_id === comment_id) {
      matched = comments[i];
      break;
    }
  }

  if (matched) {
    matched.classList.add('comment_referenced')
  }
}