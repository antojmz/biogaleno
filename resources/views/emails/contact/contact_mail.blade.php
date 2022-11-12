<table>
    <thead style='text-align: center;'>
        <tr><td><br></td></tr>
        <tr>
            <td style='border:none;' colspan='2'>
	            <a href='https://biogaleno.com'>
                    <img src="{{ asset('img/logo_biogaleno_2.png') }}" alt="" height="60">
                </a>
                <br><br>
	        </td>
        </tr>
    </thead>
    <tbody>
	    <tr><td><br></td></tr>
        <tr>
	        <td style='border:none;'><strong>Nombre:</strong> {{ $data['name'] }}</td>
	    </tr>
	    <tr><td><br></td></tr>
        <tr>
	        <td style='border:none;'><strong>Email:</strong> {{ $data['email'] }}</td>
	    </tr>
	    <tr><td><br></td></tr>
	    <tr>
            <td style='border:none;'><strong>Título:</strong> {{ $data['subject'] }}</td>
        </tr>
	    <tr><td><br></td></tr>
	    <tr>
            <td colspan='2' style='border:none;'>
                {{ $data['message'] }}
            </td>
        </tr>
	</tbody>
</table>