<?php
/*<?php echo $home[$language]['0']?>
<select onchange="set_language()" name="language" id="language">
								<option value="hi" <?php echo $hi_select?>>HINDI</option>
								<option value="en" <?php echo $en_select?>>ENGLISH</option>
								<option value="ur" <?php echo $ur_select?>>URDU</option>
								<option value="tl" <?php echo $tl_select?>>TELUGU</option>
								<option value="tm" <?php echo $tm_select?>>TAmIL</option>
							</select>
							<script src="https://code.jquery.com/jquery-3.5.0.min.js"></script>
			<script>
			function set_language(){
				var language=jQuery('#language').val();
				window.location.href='http://127.0.0.1/l/?language='+language;
			}
			</script>
*/
$en_select='';
$hi_select='';	
$ur_select='';
$tm_select='';	
$tl_select='';	
$language='';
if((isset($_GET['language']) && $_GET['language']=='en') || !isset($_GET['language'])){
$en_select='selected';	
$language='en';
}elseif((isset($_GET['language']) && $_GET['language']=='hi')){
$hi_select='selected';
$language='hi';
}elseif((isset($_GET['language']) && $_GET['language']=='ur')){
$hi_select='selected';
$language='ur';
}elseif((isset($_GET['language']) && $_GET['language']=='tm')){
$hi_select='selected';
$language='tm';
}elseif((isset($_GET['language']) && $_GET['language']=='tl')){
$hi_select='selected';
$language='tl';
}/*translation starts*/





$home=array(
'en'=>array('home'),
'hi'=>array('घर'),
'ur'=>array('گھر'),
'tl'=>array('ఇంటికి'),
'tm'=>array('வீடு')
);



$next=array(
'en'=>array('Next Page'),
'hi'=>array('अगला पृष्ठ'),
'ur'=>array('اگلا صفحہ'),
'tl'=>array('తరువాతి పేజీ'),
'tm'=>array('
அடுத்த பக்கம்')
);



$h1=array(
'en'=>array('This is home page.'),
'hi'=>array('यह होम पेज है|'),
'ur'=>array('یہ ہوم پیج ہے۔'),
'tl'=>array('ఇది హోమ్ పేజీ.'),
'tm'=>array('
இது முகப்பு பக்கம்.')
);



$p1=array(
'en'=>array('This is simple home page consits of about changing language of a page in different languages. It is written in php and javascript language.'),
'hi'=>array('यह एक साधारण होम पेज है जिसमें विभिन्न भाषाओं में एक पेज की भाषा बदलने के बारे में बताया गया है। यह PHP और जावास्क्रिप्ट भाषा में लिखा गया है।'),
'ur'=>array('یہ ایک سادہ ہوم پیج اصول ہے جو مختلف زبانوں میں کسی صفحے کی زبان بدلنے کے بارے میں ہے۔ یہ پی ایچ پی اور جاوا اسکرپٹ زبان میں لکھا گیا ہے۔'),
'tl'=>array('వివిధ భాషలలో పేజీ యొక్క భాషను మార్చడం గురించి ఇది సాధారణ హోమ్ పేజీ. ఇది php మరియు జావాస్క్రిప్ట్ భాషలో వ్రాయబడింది.'),
'tm'=>array('
வெவ்வேறு பக்கங்களில் ஒரு பக்கத்தின் மொழியை மாற்றுவது பற்றிய எளிய முகப்புப் பக்கம் இது. இது php மற்றும் ஜாவாஸ்கிரிப்ட் மொழியில் எழுதப்பட்டுள்ளது.')
);

 $about=array(
'en'=>array('About'),
'hi'=>array('के बारे में'),
'ur'=>array('کے بارے میں'),
'tl'=>array('గురించి'),
'tm'=>array('
பற்றி')
);


  $cont=array(
'en'=>array('India, officially the Republic of India (Hindi: Bhārat Gaṇarājya),[23] is a country in South Asia. It is the second-most populous country, the seventh-largest country by land area, and the most populous democracy in the world. Bounded by the Indian Ocean on the south, the Arabian Sea on the southwest, and the Bay of Bengal on the southeast, it shares land borders with Pakistan to the west;[f] China, Nepal, and Bhutan to the north; and Bangladesh and Myanmar to the east. In the Indian Ocean, India is in the vicinity of Sri Lanka and the Maldives; its Andaman and Nicobar Islands share a maritime border with Thailand, Myanmar and Indonesia.'),
'hi'=>array('भारत, आधिकारिक तौर पर भारत गणराज्य (हिंदी: भारत गणराज्य), [२३] दक्षिण एशिया का एक देश है। यह दूसरा सबसे अधिक आबादी वाला देश है, क्षेत्रफल के हिसाब से सातवां सबसे बड़ा देश है, और दुनिया में सबसे अधिक आबादी वाला लोकतंत्र है। दक्षिण में हिंद महासागर, दक्षिण-पश्चिम में अरब सागर और दक्षिण-पूर्व में बंगाल की खाड़ी से घिरा, यह पश्चिम में पाकिस्तान के साथ भूमि सीमा साझा करता है; [च] उत्तर में चीन, नेपाल और भूटान; और पूर्व में बांग्लादेश और म्यांमार। हिंद महासागर में, भारत श्रीलंका और मालदीव के आसपास के क्षेत्र में है; इसके अंडमान और निकोबार द्वीप समूह थाईलैंड, म्यांमार और इंडोनेशिया के साथ एक समुद्री सीमा साझा करते हैं।'),
'ur'=>array('ہندوستان ، سرکاری طور پر جمہوریہ ہند (ہندی: بھارت گاجریا) ، [23] جنوبی ایشیا کا ایک ملک ہے۔ یہ دوسرا سب سے زیادہ آبادی والا ملک ، زمینی رقبے کے لحاظ سے ساتواں بڑا ملک اور دنیا کی سب سے زیادہ آبادی والی جمہوریت ہے۔ جنوب میں بحر ہند ، جنوب مغرب میں بحیرہ عرب ، اور جنوب مشرق میں خلیج بنگال ، یہ مغرب میں پاکستان کے ساتھ زمینی سرحدیں بانٹتا ہے ، [f] شمال میں چین ، نیپال اور بھوٹان؛ اور مشرق میں بنگلہ دیش اور میانمار۔ بحر ہند میں ، بھارت سری لنکا اور مالدیپ کے آس پاس ہے۔ انڈمان اور نیکوبار جزائر تھائی لینڈ ، میانمار اور انڈونیشیا کے ساتھ ایک سمندری سرحد میں شریک ہیں۔'),
'tm'=>array('இந்தியா, அதிகாரப்பூர்வமாக இந்திய குடியரசு (இந்தி: பாரத் கஜாராஜ்யா), [23] தெற்காசியாவில் உள்ள ஒரு நாடு. இது இரண்டாவது அதிக மக்கள் தொகை கொண்ட நாடு, நிலப்பரப்பின் அடிப்படையில் ஏழாவது பெரிய நாடு, மற்றும் உலகின் அதிக மக்கள் தொகை கொண்ட ஜனநாயகம். தெற்கில் இந்தியப் பெருங்கடல், தென்மேற்கில் அரபிக்கடல் மற்றும் தென்கிழக்கில் வங்காள விரிகுடா ஆகியவற்றுடன் எல்லைகளாகக் கொண்டு, மேற்கில் பாகிஸ்தானுடன் நில எல்லைகளைப் பகிர்ந்து கொள்கிறது; [f] சீனா, நேபாளம் மற்றும் பூட்டான் வடக்கே; மற்றும் கிழக்கில் பங்களாதேஷ் மற்றும் மியான்மர். இந்தியப் பெருங்கடலில், இந்தியா இலங்கை மற்றும் மாலத்தீவுக்கு அருகில் உள்ளது; அதன் அந்தமான் மற்றும் நிக்கோபார் தீவுகள் தாய்லாந்து, மியான்மர் மற்றும் இந்தோனேசியாவுடன் கடல் எல்லையைப் பகிர்ந்து கொள்கின்றன.'),
'tl'=>array('
భారతదేశం, అధికారికంగా రిపబ్లిక్ ఆఫ్ ఇండియా (హిందీ: భరత్ గానారాజ్య), [23] దక్షిణ ఆసియాలోని ఒక దేశం. ఇది రెండవ అత్యధిక జనాభా కలిగిన దేశం, భూ విస్తీర్ణం ప్రకారం ఏడవ అతిపెద్ద దేశం మరియు ప్రపంచంలో అత్యధిక జనాభా కలిగిన ప్రజాస్వామ్యం. దక్షిణాన హిందూ మహాసముద్రం, నైరుతిలో అరేబియా సముద్రం మరియు ఆగ్నేయంలో బంగాళాఖాతం సరిహద్దులుగా, పశ్చిమాన పాకిస్థాన్‌తో భూ సరిహద్దులను పంచుకుంటుంది; [f] చైనా, నేపాల్ మరియు భూటాన్ ఉత్తరాన; మరియు తూర్పున బంగ్లాదేశ్ మరియు మయన్మార్. హిందూ మహాసముద్రంలో, భారతదేశం శ్రీలంక మరియు మాల్దీవుల పరిసరాల్లో ఉంది; దాని అండమాన్ మరియు నికోబార్ దీవులు థాయిలాండ్, మయన్మార్ మరియు ఇండోనేషియాతో సముద్ర సరిహద్దును పంచుకుంటాయి.')
);
 


?>