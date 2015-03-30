<?php defined('BASEPATH') or exit('No direct script access allowed');
/**
 * Maintenance Module
 *
*
* Ananas  
*
* A simple, fast, development framework for web applications and software licenses software
*
* @package		Ananas
* @author		Ananas Dev Team
// ------------------------------------------------------------------------
*/
class Module_System extends Module
{

	public $version = '1.0';

	public function info()
	{
		return array(
			'name' => array(
				'en' => 'System',
				'pt' => 'Manutenção',
				'ar' => 'الصيانة',
				'el' => 'Συντήρηση',
				'hu' => 'Karbantartás',
				'fi' => 'Ylläpito',
				'fr' => 'system',
				'id' => 'Pemeliharaan',
				'se' => 'Underhåll',
				'sl' => 'Vzdrževanje',
				'th' => 'การบำรุงรักษา',
				'zh' => '維護',
			),
			'description' => array(
				'en' => 'Manage the site cache and export information from the database.',
				'pt' => 'Gerir o cache do seu site e exportar informações da base de dados.',
				'ar' => 'حذف عناصر الذاكرة المخبأة عبر واجهة الإدارة.',
				'el' => 'Διαγραφή αντικειμένων προσωρινής αποθήκευσης μέσω της περιοχής διαχείρισης.',
				'id' => 'Mengatur cache situs dan mengexport informasi dari database.',
				'fr' => 'Gérer le cache du site et exporter les contenus de la base de données',
				'fi' => 'Hallinoi sivuston välimuistia ja vie tietoa tietokannasta.',
				'hu' => 'Az oldal gyorsítótár kezelése és az adatbázis exportálása.',
				'se' => 'Underhåll webbplatsens cache och exportera data från webbplatsens databas.',
				'sl' => 'Upravljaj s predpomnilnikom strani (cache) in izvozi podatke iz baze.',
				'th' => 'การจัดการแคชเว็บไซต์และข้อมูลการส่งออกจากฐานข้อมูล',
				'zh' => '經由管理介面手動刪除暫存資料。',
			),
			'frontend' => false,
			'backend' => true,
			'menu' => 'utilities',
			'roles'     => array('create', 'view', 'edit', 'change_status')
		);
        }
}