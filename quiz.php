<!DOCTYPE html>
<html>

<head>
	<title> What is MP3 </title>
	<link href="styles/quiz.css" rel="stylesheet" />
</head>

<body>
	<h1>MP3 and MP4 Quiz</h1>

	<div class="navbar">
		<a href="index.html">Index</a>
		<a href="topic.html">Topic</a>
		<a href="quiz.html">Quiz</a>
		<a href="enhancements.html"> Enhancements</a>
	</div>
	<form>
		<fieldset>
			<legend>Student Details</legend>
			<p><label for="sid"> Student ID</label>
				<input type="text" name="sid" id="sid" size="10" pattern="\d{7,10}" required="required" />
			</p>
			<p><label for="gname"> Given Name</label>
				<input type="text" name="gname" id="gname" maxlength="15" pattern="^[a-zA-Z\s]+$" size="15"
					required="required" />
				<label for="fname"> Family Name</label>
				<input type="text" name="fname" id="fname" maxlength="15" pattern="^[a-zA-Z\s]+$" size="15"
					required="required" />
			</p>
		</fieldset>
		<h3>1. Who is considered the "father of the MP3" format?</h3>
		<label><input type="radio" name="mp3-name" value="Ernst Eberlein"> Ernst Eberlein</label><br>
		<label><input type="radio" name="mp3-name" value="Heinz Gerhäuser"> Heinz Gerhäuser</label><br>
		<label><input type="radio" name="mp3-name" value="Bernhard Grill"> Bernhard Grill</label><br>
		<label><input type="radio" name="mp3-name" value="Karlheinz Brandenburg"> Karlheinz Brandenburg</label><br>

		<h3>2. In what year was the MP3 format initially released?</h3>
		<label><input type="radio" name="mp3-year" value="1981" required="required"> 1981</label><br>
		<label><input type="radio" name="mp3-year" value="1991" required="required"> 1991</label><br>
		<label><input type="radio" name="mp3-year" value="2001" required="required"> 2001</label><br>
		<label><input type="radio" name="mp3-year" value="2011" required="required"> 2011</label><br>

		<h3>3. What are the advantages of using MP3 over other audio formats?</h3>
		<label><input type="radio" name="mp3-advantage" value="Lower file size and easier transmission over networks">
			Lower file size and easier transmission over networks.</label><br>
		<label><input type="radio" name="mp3-advantage"
				value="Higher file size and more difficult transmission over networks"> Higher file size and more
			difficult transmission over networks.</label><br>
		<label><input type="radio" name="mp3-advantage" value="Lower costs for music artists to promote their music">
			Lower costs for music artists to promote their music.</label><br>
		<label><input type="radio" name="mp3-advantage" value="Both B and C"> Both B and C.</label><br>

		<h3>4. What was the primary reason for the creation of the MP3 format?</h3>
		<label><input type="radio" name="mp3-reason"
				value="To provide a high-quality, low-bitrate copy of a sound file"> To provide a high-quality,
			low-bitrate copy of a sound file.</label><br>
		<label><input type="radio" name="mp3-reason"
				value="To provide a high-quality, high-bitrate copy of a sound file"> To provide a high-quality,
			high-bitrate copy of a sound file.</label><br>
		<label><input type="radio" name="mp3-reason" value="To provide a low-quality, low-bitrate copy of a sound file">
			To provide a low-quality, low-bitrate copy of a sound file.</label><br>
		<label><input type="radio" name="mp3-reason"
				value="To provide a low-quality, high-bitrate copy of a sound file"> To provide a low-quality,
			high-bitrate copy of a sound file.</label><br>

		<h3>5. What is the difference between MP3 and MP4 file formats?</h3>
		<label><input type="radio" name="mp3-mp4"
				value="MP3 is a digital multimedia format that can store video, audio, subtitles, and other media files, while MP4 is a format for storage and audio coding">
			MP3 is a digital multimedia format that can store video, audio, subtitles, and other media files, while MP4
			is a format for storage and audio coding.</label><br>
		<label><input type="radio" name="mp3-mp4" value="MP3 can handle a wider range of media types than MP4"> MP3 can
			handle a wider range of media types than MP4.</label><br>
		<label><input type="radio" name="mp3-mp4" value="MP3 can compress video content while MP4 cannot"> MP3 can
			compress video content while MP4 cannot.</label><br>
		<label><input type="radio" name="mp3-mp4" value="Both A and C"> Both A and C.</label><br>

		<h3>6. Can MP3 files contain video content?</h3>
		<label><input type="radio" name="mp3-content" value="Yes" required="required"> Yes</label><br>
		<label><input type="radio" name="mp3-content" value="No" required="required"> No</label><br>

		<h3>7. In what year was the MP4 format released?</h3>
		<label><input type="radio" name="mp4-year" value="1999" required="required"> 1999</label><br>
		<label><input type="radio" name="mp4-year" value="2000" required="required"> 2000</label><br>
		<label><input type="radio" name="mp4-year" value="2001" required="required"> 2001</label><br>
		<label><input type="radio" name="mp4-year" value="2002" required="required"> 2002</label><br>

		<h3>8. What types of media can be stored in an MP4 file format?</h3>
		<label><input type="radio" name="mp4-content" value="Video only"> Video only</label><br>
		<label><input type="radio" name="mp4-content" value="Audio only"> Audio only</label><br>
		<label><input type="radio" name="mp4-content" value="Images only"> Images only</label><br>
		<label><input type="radio" name="mp4-content" value="Video, audio, images, and text"> Video, audio, images, and
			text.</label><br>

		<h3>9. Can video content be compressed in an MP4 file format?</h3>
		<label><input type="radio" name="mp4-compressed" value="Yes" required="required"> Yes</label><br>
		<label><input type="radio" name="mp4-compressed" value="No" required="required"> No</label><br>

		<h3>10. Will newly released devices continue to support the MP3 file format in the future?</h3>
		<label><input type="radio" name="mp3-support" value="Yes" required="required"> Yes</label><br>
		<label><input type="radio" name="mp3-support" value="No" required="required"> No</label><br>
		<h3>11. Mark the names who are involved in invented and developed MP3?</h3>
		<input type="checkbox" id="Karlheinz" name="category[]" value="Karlheinz" checked="checked" />
		<label for="Karlheinz">Karlheinz Brandenburg</label>
		<input type="checkbox" id="Ernst" name="category[]" value="Ernst" />
		<label for="Ernst">Ernst Eberlein</label>
		<input type="checkbox" id="Grill" name="category[]" value="Grill" />
		<label for="Grill">Bernhard Grill</label>
		<input type="checkbox" id="Galileo" name="category[]" value="Galileo" />
		<label for="Galileo">Galileo Galilei</label>
		</p>
		<h3><label for="comments">Description of Issues you think on MP3 & MP4?</label></h3>
		<p><textarea id="comments" name="comments" rows="4" cols="40"
				placeholder="Write description of your problem here . . "></textarea></p>

		<input type="submit" value="Submit" />
		<input type="reset" value="Reset" />




	</form>

	<div class="footer">
		<p> Contact me at <a href="mailto:jlai@swin.edu.au">jlai@swin.edu.au</a></p>
	</div>
</body>

</html>