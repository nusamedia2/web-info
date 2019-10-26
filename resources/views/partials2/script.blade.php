	<!-- SCIPTS -->

	<script src="plugin-frameworks/jquery-3.2.1.min.js"></script>

	<script src="plugin-frameworks/tether.min.js"></script>

	<script src="plugin-frameworks/bootstrap.js"></script>

    <script src="common/scripts.js"></script>

    <select name="formal" onchange="javascript:handleSelect(this)">
        <option value="home">Home</option>
        <option value="contact">Contact</option>
        </select>

        <script type="text/javascript">
        function handleSelect(elm)
        {
        window.location = elm.value+".php";
        }
        </script>
