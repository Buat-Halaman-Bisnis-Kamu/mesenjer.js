try {
  // Returns a `FacebookFacebookResponse` object
  $response = $fb->post(
    '/https://m.me/tikakripik.tikakripik',
    array (),
    '{access-token}'
  );
} catch(FacebookExceptionsFacebookResponseException $e) {
  echo 'Graph returned an error: ' . $e->getMessage();
  exit;
} catch(FacebookExceptionsFacebookSDKException $e) {
  echo 'Facebook SDK returned an error: ' . $e->getMessage();
  exit;
}
$graphNode = $response->getGraphNode();
