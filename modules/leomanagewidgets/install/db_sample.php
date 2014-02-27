<?php
/* Data sample for moduleleomanagewidgets*/
$query = "CREATE TABLE IF NOT EXISTS `_DB_PREFIX_leomanagewidgets` (
  `id_leomanagewidgets` int(11) NOT NULL AUTO_INCREMENT,
  `hook` varchar(25) DEFAULT NULL,
  `task` varchar(25) DEFAULT NULL,
  `active` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_leomanagewidgets`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8;
INSERT INTO `_DB_PREFIX_leomanagewidgets` VALUES
('12','displayHome','carousel','1'),
('13','displayPromoteTop','carousel','1'),
('14','displayPromoteTop','custom','1'),
('16','displayRightColumn','custom','1'),
('18','displayFooter','custom','1'),
('19','displayFootNav','custom','1');
CREATE TABLE IF NOT EXISTS `_DB_PREFIX_leomanagewidgets_exceptions` (
  `id_leomanagewidgets` int(11) NOT NULL DEFAULT '0',
  `id_shop` int(11) NOT NULL DEFAULT '0',
  `hook` varchar(255) NOT NULL,
  `file_name` varchar(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`id_leomanagewidgets`,`id_shop`,`hook`,`file_name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
CREATE TABLE IF NOT EXISTS `_DB_PREFIX_leomanagewidgets_shop` (
  `id_leomanagewidgets` int(11) NOT NULL DEFAULT '0',
  `id_shop` int(11) NOT NULL DEFAULT '0',
  `position` int(11) DEFAULT NULL,
  `title` text,
  `configs` text,
  PRIMARY KEY (`id_leomanagewidgets`,`id_shop`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
INSERT INTO `_DB_PREFIX_leomanagewidgets_shop` VALUES
('12','LEO_ID_SHOP','0','YTo4OntzOjI6ImVuIjtzOjE3OiJGZWF0dXJlZCBwcm9kdWN0cyI7czoyOiJkZSI7czoxNzoiRmVhdHVyZWQgcHJvZHVjdHMiO3M6MjoiYnIiO3M6MTc6IkZlYXR1cmVkIHByb2R1Y3RzIjtzOjI6ImVzIjtzOjE3OiJGZWF0dXJlZCBwcm9kdWN0cyI7czoyOiJwbCI7czoxNzoiRmVhdHVyZWQgcHJvZHVjdHMiO3M6MjoicnUiO3M6MTc6IkZlYXR1cmVkIHByb2R1Y3RzIjtzOjI6Iml0IjtzOjE3OiJGZWF0dXJlZCBwcm9kdWN0cyI7czoyOiJubCI7czoxNzoiRmVhdHVyZWQgcHJvZHVjdHMiO30=','YTozMTp7czo4OiJ0aXRsZV9lbiI7czoxNzoiRmVhdHVyZWQgcHJvZHVjdHMiO3M6ODoidGl0bGVfbmwiO3M6MTc6IkZlYXR1cmVkIHByb2R1Y3RzIjtzOjg6InRpdGxlX2l0IjtzOjE3OiJGZWF0dXJlZCBwcm9kdWN0cyI7czo4OiJ0aXRsZV9ydSI7czoxNzoiRmVhdHVyZWQgcHJvZHVjdHMiO3M6ODoidGl0bGVfcGwiO3M6MTc6IkZlYXR1cmVkIHByb2R1Y3RzIjtzOjg6InRpdGxlX2VzIjtzOjE3OiJGZWF0dXJlZCBwcm9kdWN0cyI7czo4OiJ0aXRsZV9iciI7czoxNzoiRmVhdHVyZWQgcHJvZHVjdHMiO3M6ODoidGl0bGVfZGUiO3M6MTc6IkZlYXR1cmVkIHByb2R1Y3RzIjtzOjEzOiJkaXNwbGF5X3RpdGxlIjtzOjE6IjEiO3M6MTA6ImFjdGl2ZV9tb2QiO3M6MToiMSI7czo0OiJ0eXBlIjtzOjg6ImZlYXR1cmVkIjtzOjY6ImNhdGlkcyI7YTo4OntpOjA7czoxOiI3IjtpOjE7czoyOiIxMiI7aToyO3M6MjoiMTMiO2k6MztzOjI6IjEwIjtpOjQ7czoxOiI4IjtpOjU7czoxOiI2IjtpOjY7czoyOiIxMSI7aTo3O3M6MToiOSI7fXM6NjoicG9yZGVyIjtzOjg6ImRhdGVfYWRkIjtzOjM6IndheSI7czozOiJBU0MiO3M6OToiaXRlbXNwYWdlIjtzOjE6IjQiO3M6NzoiY29sdW1ucyI7czoxOiI0IjtzOjg6Iml0ZW1zdGFiIjtzOjI6IjEyIjtzOjE0OiJkZXNjcmlwdGlvbl9lbiI7czowOiIiO3M6MTQ6ImRlc2NyaXB0aW9uX25sIjtzOjA6IiI7czoxNDoiZGVzY3JpcHRpb25faXQiO3M6MDoiIjtzOjE0OiJkZXNjcmlwdGlvbl9ydSI7czowOiIiO3M6MTQ6ImRlc2NyaXB0aW9uX3BsIjtzOjA6IiI7czoxNDoiZGVzY3JpcHRpb25fZXMiO3M6MDoiIjtzOjE0OiJkZXNjcmlwdGlvbl9iciI7czowOiIiO3M6MTQ6ImRlc2NyaXB0aW9uX2RlIjtzOjA6IiI7czo0OiJ0YXNrIjtzOjg6ImNhcm91c2VsIjtzOjQ6Imhvb2siO3M6MTE6ImRpc3BsYXlIb21lIjtzOjE5OiJpZF9sZW9tYW5hZ2V3aWRnZXRzIjtzOjA6IiI7czo3OiJpZF9zaG9wIjtzOjE6IjEiO3M6MTA6ImV4Y2VwdGlvbnMiO3M6MDoiIjtzOjEwOiJzdWJtaXRTYXZlIjtzOjQ6IlNhdmUiO30='),
('13','LEO_ID_SHOP','1','YTo4OntzOjI6ImVuIjtzOjEyOiJOZXcgYXJyaXZhbHMiO3M6MjoiZGUiO3M6MTI6Ik5ldyBhcnJpdmFscyI7czoyOiJiciI7czoxMjoiTmV3IGFycml2YWxzIjtzOjI6ImVzIjtzOjEyOiJOZXcgYXJyaXZhbHMiO3M6MjoicGwiO3M6MTI6Ik5ldyBhcnJpdmFscyI7czoyOiJydSI7czoxMjoiTmV3IGFycml2YWxzIjtzOjI6Iml0IjtzOjEyOiJOZXcgYXJyaXZhbHMiO3M6MjoibmwiO3M6MTI6Ik5ldyBhcnJpdmFscyI7fQ==','YTozMTp7czo4OiJ0aXRsZV9lbiI7czoxMjoiTmV3IGFycml2YWxzIjtzOjg6InRpdGxlX25sIjtzOjEyOiJOZXcgYXJyaXZhbHMiO3M6ODoidGl0bGVfaXQiO3M6MTI6Ik5ldyBhcnJpdmFscyI7czo4OiJ0aXRsZV9ydSI7czoxMjoiTmV3IGFycml2YWxzIjtzOjg6InRpdGxlX3BsIjtzOjEyOiJOZXcgYXJyaXZhbHMiO3M6ODoidGl0bGVfZXMiO3M6MTI6Ik5ldyBhcnJpdmFscyI7czo4OiJ0aXRsZV9iciI7czoxMjoiTmV3IGFycml2YWxzIjtzOjg6InRpdGxlX2RlIjtzOjEyOiJOZXcgYXJyaXZhbHMiO3M6MTM6ImRpc3BsYXlfdGl0bGUiO3M6MToiMSI7czoxMDoiYWN0aXZlX21vZCI7czoxOiIxIjtzOjQ6InR5cGUiO3M6MzoibmV3IjtzOjY6ImNhdGlkcyI7YTo4OntpOjA7czoxOiI3IjtpOjE7czoyOiIxMiI7aToyO3M6MjoiMTMiO2k6MztzOjI6IjEwIjtpOjQ7czoxOiI4IjtpOjU7czoxOiI2IjtpOjY7czoyOiIxMSI7aTo3O3M6MToiOSI7fXM6NjoicG9yZGVyIjtzOjg6ImRhdGVfYWRkIjtzOjM6IndheSI7czozOiJBU0MiO3M6OToiaXRlbXNwYWdlIjtzOjE6IjUiO3M6NzoiY29sdW1ucyI7czoxOiI1IjtzOjg6Iml0ZW1zdGFiIjtzOjI6IjE1IjtzOjE0OiJkZXNjcmlwdGlvbl9lbiI7czowOiIiO3M6MTQ6ImRlc2NyaXB0aW9uX25sIjtzOjA6IiI7czoxNDoiZGVzY3JpcHRpb25faXQiO3M6MDoiIjtzOjE0OiJkZXNjcmlwdGlvbl9ydSI7czowOiIiO3M6MTQ6ImRlc2NyaXB0aW9uX3BsIjtzOjA6IiI7czoxNDoiZGVzY3JpcHRpb25fZXMiO3M6MDoiIjtzOjE0OiJkZXNjcmlwdGlvbl9iciI7czowOiIiO3M6MTQ6ImRlc2NyaXB0aW9uX2RlIjtzOjA6IiI7czo0OiJ0YXNrIjtzOjg6ImNhcm91c2VsIjtzOjQ6Imhvb2siO3M6MTc6ImRpc3BsYXlQcm9tb3RlVG9wIjtzOjE5OiJpZF9sZW9tYW5hZ2V3aWRnZXRzIjtzOjI6IjEzIjtzOjc6ImlkX3Nob3AiO3M6MToiMSI7czoxMDoiZXhjZXB0aW9ucyI7czowOiIiO3M6MTA6InN1Ym1pdFNhdmUiO3M6NDoiU2F2ZSI7fQ=='),
('14','LEO_ID_SHOP','0','YTo4OntzOjI6ImVuIjtzOjE1OiJDdXN0b20gUHJvbW90b3AiO3M6MjoiZGUiO3M6MTU6IkN1c3RvbSBQcm9tb3RvcCI7czoyOiJiciI7czoxNToiQ3VzdG9tIFByb21vdG9wIjtzOjI6ImVzIjtzOjE1OiJDdXN0b20gUHJvbW90b3AiO3M6MjoicGwiO3M6MTU6IkN1c3RvbSBQcm9tb3RvcCI7czoyOiJydSI7czoxNToiQ3VzdG9tIFByb21vdG9wIjtzOjI6Iml0IjtzOjE1OiJDdXN0b20gUHJvbW90b3AiO3M6MjoibmwiO3M6MTU6IkN1c3RvbSBQcm9tb3RvcCI7fQ==','YToyNDp7czo4OiJ0aXRsZV9lbiI7czoxNToiQ3VzdG9tIFByb21vdG9wIjtzOjg6InRpdGxlX2RlIjtzOjE1OiJDdXN0b20gUHJvbW90b3AiO3M6ODoidGl0bGVfYnIiO3M6MTU6IkN1c3RvbSBQcm9tb3RvcCI7czo4OiJ0aXRsZV9lcyI7czoxNToiQ3VzdG9tIFByb21vdG9wIjtzOjg6InRpdGxlX3BsIjtzOjE1OiJDdXN0b20gUHJvbW90b3AiO3M6ODoidGl0bGVfcnUiO3M6MTU6IkN1c3RvbSBQcm9tb3RvcCI7czo4OiJ0aXRsZV9pdCI7czoxNToiQ3VzdG9tIFByb21vdG9wIjtzOjg6InRpdGxlX25sIjtzOjE1OiJDdXN0b20gUHJvbW90b3AiO3M6MTM6ImRpc3BsYXlfdGl0bGUiO3M6MToiMCI7czoxMDoiYWN0aXZlX21vZCI7czoxOiIxIjtzOjEwOiJjb250ZW50X2VuIjtzOjY2MToiPGRpdiBjbGFzcz0iYm94LWNvbnRlbnQgcm93Ij4NCjxkaXYgY2xhc3M9IndlbGNvbWUgYmxvY2sgY29sLXhzLTEyIj4NCjxkaXYgY2xhc3M9ImltYWdlIGNvbC1tZC00Ij48aW1nIHNyYz0ibW9kdWxlcy9sZW9tYW5hZ2V3aWRnZXRzL2ltZy93ZWxjb21lLnBuZyIgYWx0PSIiIC8+PC9kaXY+DQo8ZGl2IGNsYXNzPSJ3ZWJfYmxvY2sgY29sLW1kLTgiPg0KPGgxPldlbGNvbWUgITwvaDE+DQo8aDI+RHVpcyBzZWQgb2RpbyBzaXQgYW1ldCBuaWJoIHZ1bHB1dGF0ZSBjdXJzdXMgYSBzaXQgc29jaW9zcXUgYWQgbGl0b3JhPC9oMj4NCjxwPkxvcmVtIGlwc3VtIGRvbG9yIHNpdCBhbWV0LCBjb25zZWN0ZXR1ciBhZGlwaXNjaW5nIGVsaXQuIE51bGxhIG1pIGVyb3MsIGZhY2lsaXNpcyBhYyBtb2xsaXMgZXQsIHVsbGFtY29ycGVyIG5vbiBuZXF1ZS4gQ3VtIHNvY2lpcyBuYXRvcXVlIHBlbmF0aWJ1cyBldCBtYWduaXMgZGlzIHBhcnR1cmllbnQgbW9udGVzLCBuYXNjZXR1ciByaWRpY3VsdXMgbXVzLiBTZWQgYWMgcHJldGl1bSBkdWkuIFByYWVzZW50IGFyY3UgZHVpLCBjb252YWxsaXMgZWdldCBmYWNpbGlzaXMgaW4sIHZ1bHB1dGF0ZSB1dCBsYWN1cy4gQWxpcXVhbSB1bHRyaWNpZXMgbGFvcmVldCBtYWxlc3VhZGEuPC9wPg0KPC9kaXY+DQo8L2Rpdj4NCjwvZGl2PiI7czoxMDoiY29udGVudF9kZSI7czo2NzE6IjxkaXYgY2xhc3M9ImJveC1jb250ZW50IHJvdyI+DQo8ZGl2IGNsYXNzPSJ3ZWxjb21lIGJsb2NrIGNvbC14cy0xMiI+DQo8ZGl2IGNsYXNzPSJpbWFnZSBjb2wtbWQtNCI+PGltZyBzcmM9Im1vZHVsZXMvbGVvbWFuYWdld2lkZ2V0cy9pbWcvd2VsY29tZS5wbmciIGFsdD0iIiAvPjwvZGl2Pg0KPGRpdiBjbGFzcz0id2ViX2Jsb2NrIGNvbC1tZC04IGhpZGRlbi14cyI+DQo8aDE+V2VsY29tZSAhPC9oMT4NCjxoMj5EdWlzIHNlZCBvZGlvIHNpdCBhbWV0IG5pYmggdnVscHV0YXRlIGN1cnN1cyBhIHNpdCBzb2Npb3NxdSBhZCBsaXRvcmE8L2gyPg0KPHA+TG9yZW0gaXBzdW0gZG9sb3Igc2l0IGFtZXQsIGNvbnNlY3RldHVyIGFkaXBpc2NpbmcgZWxpdC4gTnVsbGEgbWkgZXJvcywgZmFjaWxpc2lzIGFjIG1vbGxpcyBldCwgdWxsYW1jb3JwZXIgbm9uIG5lcXVlLiBDdW0gc29jaWlzIG5hdG9xdWUgcGVuYXRpYnVzIGV0IG1hZ25pcyBkaXMgcGFydHVyaWVudCBtb250ZXMsIG5hc2NldHVyIHJpZGljdWx1cyBtdXMuIFNlZCBhYyBwcmV0aXVtIGR1aS4gUHJhZXNlbnQgYXJjdSBkdWksIGNvbnZhbGxpcyBlZ2V0IGZhY2lsaXNpcyBpbiwgdnVscHV0YXRlIHV0IGxhY3VzLiBBbGlxdWFtIHVsdHJpY2llcyBsYW9yZWV0IG1hbGVzdWFkYS48L3A+DQo8L2Rpdj4NCjwvZGl2Pg0KPC9kaXY+IjtzOjEwOiJjb250ZW50X2JyIjtzOjY3MToiPGRpdiBjbGFzcz0iYm94LWNvbnRlbnQgcm93Ij4NCjxkaXYgY2xhc3M9IndlbGNvbWUgYmxvY2sgY29sLXhzLTEyIj4NCjxkaXYgY2xhc3M9ImltYWdlIGNvbC1tZC00Ij48aW1nIHNyYz0ibW9kdWxlcy9sZW9tYW5hZ2V3aWRnZXRzL2ltZy93ZWxjb21lLnBuZyIgYWx0PSIiIC8+PC9kaXY+DQo8ZGl2IGNsYXNzPSJ3ZWJfYmxvY2sgY29sLW1kLTggaGlkZGVuLXhzIj4NCjxoMT5XZWxjb21lICE8L2gxPg0KPGgyPkR1aXMgc2VkIG9kaW8gc2l0IGFtZXQgbmliaCB2dWxwdXRhdGUgY3Vyc3VzIGEgc2l0IHNvY2lvc3F1IGFkIGxpdG9yYTwvaDI+DQo8cD5Mb3JlbSBpcHN1bSBkb2xvciBzaXQgYW1ldCwgY29uc2VjdGV0dXIgYWRpcGlzY2luZyBlbGl0LiBOdWxsYSBtaSBlcm9zLCBmYWNpbGlzaXMgYWMgbW9sbGlzIGV0LCB1bGxhbWNvcnBlciBub24gbmVxdWUuIEN1bSBzb2NpaXMgbmF0b3F1ZSBwZW5hdGlidXMgZXQgbWFnbmlzIGRpcyBwYXJ0dXJpZW50IG1vbnRlcywgbmFzY2V0dXIgcmlkaWN1bHVzIG11cy4gU2VkIGFjIHByZXRpdW0gZHVpLiBQcmFlc2VudCBhcmN1IGR1aSwgY29udmFsbGlzIGVnZXQgZmFjaWxpc2lzIGluLCB2dWxwdXRhdGUgdXQgbGFjdXMuIEFsaXF1YW0gdWx0cmljaWVzIGxhb3JlZXQgbWFsZXN1YWRhLjwvcD4NCjwvZGl2Pg0KPC9kaXY+DQo8L2Rpdj4iO3M6MTA6ImNvbnRlbnRfZXMiO3M6NjcxOiI8ZGl2IGNsYXNzPSJib3gtY29udGVudCByb3ciPg0KPGRpdiBjbGFzcz0id2VsY29tZSBibG9jayBjb2wteHMtMTIiPg0KPGRpdiBjbGFzcz0iaW1hZ2UgY29sLW1kLTQiPjxpbWcgc3JjPSJtb2R1bGVzL2xlb21hbmFnZXdpZGdldHMvaW1nL3dlbGNvbWUucG5nIiBhbHQ9IiIgLz48L2Rpdj4NCjxkaXYgY2xhc3M9IndlYl9ibG9jayBjb2wtbWQtOCBoaWRkZW4teHMiPg0KPGgxPldlbGNvbWUgITwvaDE+DQo8aDI+RHVpcyBzZWQgb2RpbyBzaXQgYW1ldCBuaWJoIHZ1bHB1dGF0ZSBjdXJzdXMgYSBzaXQgc29jaW9zcXUgYWQgbGl0b3JhPC9oMj4NCjxwPkxvcmVtIGlwc3VtIGRvbG9yIHNpdCBhbWV0LCBjb25zZWN0ZXR1ciBhZGlwaXNjaW5nIGVsaXQuIE51bGxhIG1pIGVyb3MsIGZhY2lsaXNpcyBhYyBtb2xsaXMgZXQsIHVsbGFtY29ycGVyIG5vbiBuZXF1ZS4gQ3VtIHNvY2lpcyBuYXRvcXVlIHBlbmF0aWJ1cyBldCBtYWduaXMgZGlzIHBhcnR1cmllbnQgbW9udGVzLCBuYXNjZXR1ciByaWRpY3VsdXMgbXVzLiBTZWQgYWMgcHJldGl1bSBkdWkuIFByYWVzZW50IGFyY3UgZHVpLCBjb252YWxsaXMgZWdldCBmYWNpbGlzaXMgaW4sIHZ1bHB1dGF0ZSB1dCBsYWN1cy4gQWxpcXVhbSB1bHRyaWNpZXMgbGFvcmVldCBtYWxlc3VhZGEuPC9wPg0KPC9kaXY+DQo8L2Rpdj4NCjwvZGl2PiI7czoxMDoiY29udGVudF9wbCI7czo2NzE6IjxkaXYgY2xhc3M9ImJveC1jb250ZW50IHJvdyI+DQo8ZGl2IGNsYXNzPSJ3ZWxjb21lIGJsb2NrIGNvbC14cy0xMiI+DQo8ZGl2IGNsYXNzPSJpbWFnZSBjb2wtbWQtNCI+PGltZyBzcmM9Im1vZHVsZXMvbGVvbWFuYWdld2lkZ2V0cy9pbWcvd2VsY29tZS5wbmciIGFsdD0iIiAvPjwvZGl2Pg0KPGRpdiBjbGFzcz0id2ViX2Jsb2NrIGNvbC1tZC04IGhpZGRlbi14cyI+DQo8aDE+V2VsY29tZSAhPC9oMT4NCjxoMj5EdWlzIHNlZCBvZGlvIHNpdCBhbWV0IG5pYmggdnVscHV0YXRlIGN1cnN1cyBhIHNpdCBzb2Npb3NxdSBhZCBsaXRvcmE8L2gyPg0KPHA+TG9yZW0gaXBzdW0gZG9sb3Igc2l0IGFtZXQsIGNvbnNlY3RldHVyIGFkaXBpc2NpbmcgZWxpdC4gTnVsbGEgbWkgZXJvcywgZmFjaWxpc2lzIGFjIG1vbGxpcyBldCwgdWxsYW1jb3JwZXIgbm9uIG5lcXVlLiBDdW0gc29jaWlzIG5hdG9xdWUgcGVuYXRpYnVzIGV0IG1hZ25pcyBkaXMgcGFydHVyaWVudCBtb250ZXMsIG5hc2NldHVyIHJpZGljdWx1cyBtdXMuIFNlZCBhYyBwcmV0aXVtIGR1aS4gUHJhZXNlbnQgYXJjdSBkdWksIGNvbnZhbGxpcyBlZ2V0IGZhY2lsaXNpcyBpbiwgdnVscHV0YXRlIHV0IGxhY3VzLiBBbGlxdWFtIHVsdHJpY2llcyBsYW9yZWV0IG1hbGVzdWFkYS48L3A+DQo8L2Rpdj4NCjwvZGl2Pg0KPC9kaXY+IjtzOjEwOiJjb250ZW50X3J1IjtzOjY3MToiPGRpdiBjbGFzcz0iYm94LWNvbnRlbnQgcm93Ij4NCjxkaXYgY2xhc3M9IndlbGNvbWUgYmxvY2sgY29sLXhzLTEyIj4NCjxkaXYgY2xhc3M9ImltYWdlIGNvbC1tZC00Ij48aW1nIHNyYz0ibW9kdWxlcy9sZW9tYW5hZ2V3aWRnZXRzL2ltZy93ZWxjb21lLnBuZyIgYWx0PSIiIC8+PC9kaXY+DQo8ZGl2IGNsYXNzPSJ3ZWJfYmxvY2sgY29sLW1kLTggaGlkZGVuLXhzIj4NCjxoMT5XZWxjb21lICE8L2gxPg0KPGgyPkR1aXMgc2VkIG9kaW8gc2l0IGFtZXQgbmliaCB2dWxwdXRhdGUgY3Vyc3VzIGEgc2l0IHNvY2lvc3F1IGFkIGxpdG9yYTwvaDI+DQo8cD5Mb3JlbSBpcHN1bSBkb2xvciBzaXQgYW1ldCwgY29uc2VjdGV0dXIgYWRpcGlzY2luZyBlbGl0LiBOdWxsYSBtaSBlcm9zLCBmYWNpbGlzaXMgYWMgbW9sbGlzIGV0LCB1bGxhbWNvcnBlciBub24gbmVxdWUuIEN1bSBzb2NpaXMgbmF0b3F1ZSBwZW5hdGlidXMgZXQgbWFnbmlzIGRpcyBwYXJ0dXJpZW50IG1vbnRlcywgbmFzY2V0dXIgcmlkaWN1bHVzIG11cy4gU2VkIGFjIHByZXRpdW0gZHVpLiBQcmFlc2VudCBhcmN1IGR1aSwgY29udmFsbGlzIGVnZXQgZmFjaWxpc2lzIGluLCB2dWxwdXRhdGUgdXQgbGFjdXMuIEFsaXF1YW0gdWx0cmljaWVzIGxhb3JlZXQgbWFsZXN1YWRhLjwvcD4NCjwvZGl2Pg0KPC9kaXY+DQo8L2Rpdj4iO3M6MTA6ImNvbnRlbnRfaXQiO3M6NjcxOiI8ZGl2IGNsYXNzPSJib3gtY29udGVudCByb3ciPg0KPGRpdiBjbGFzcz0id2VsY29tZSBibG9jayBjb2wteHMtMTIiPg0KPGRpdiBjbGFzcz0iaW1hZ2UgY29sLW1kLTQiPjxpbWcgc3JjPSJtb2R1bGVzL2xlb21hbmFnZXdpZGdldHMvaW1nL3dlbGNvbWUucG5nIiBhbHQ9IiIgLz48L2Rpdj4NCjxkaXYgY2xhc3M9IndlYl9ibG9jayBjb2wtbWQtOCBoaWRkZW4teHMiPg0KPGgxPldlbGNvbWUgITwvaDE+DQo8aDI+RHVpcyBzZWQgb2RpbyBzaXQgYW1ldCBuaWJoIHZ1bHB1dGF0ZSBjdXJzdXMgYSBzaXQgc29jaW9zcXUgYWQgbGl0b3JhPC9oMj4NCjxwPkxvcmVtIGlwc3VtIGRvbG9yIHNpdCBhbWV0LCBjb25zZWN0ZXR1ciBhZGlwaXNjaW5nIGVsaXQuIE51bGxhIG1pIGVyb3MsIGZhY2lsaXNpcyBhYyBtb2xsaXMgZXQsIHVsbGFtY29ycGVyIG5vbiBuZXF1ZS4gQ3VtIHNvY2lpcyBuYXRvcXVlIHBlbmF0aWJ1cyBldCBtYWduaXMgZGlzIHBhcnR1cmllbnQgbW9udGVzLCBuYXNjZXR1ciByaWRpY3VsdXMgbXVzLiBTZWQgYWMgcHJldGl1bSBkdWkuIFByYWVzZW50IGFyY3UgZHVpLCBjb252YWxsaXMgZWdldCBmYWNpbGlzaXMgaW4sIHZ1bHB1dGF0ZSB1dCBsYWN1cy4gQWxpcXVhbSB1bHRyaWNpZXMgbGFvcmVldCBtYWxlc3VhZGEuPC9wPg0KPC9kaXY+DQo8L2Rpdj4NCjwvZGl2PiI7czoxMDoiY29udGVudF9ubCI7czo2NzE6IjxkaXYgY2xhc3M9ImJveC1jb250ZW50IHJvdyI+DQo8ZGl2IGNsYXNzPSJ3ZWxjb21lIGJsb2NrIGNvbC14cy0xMiI+DQo8ZGl2IGNsYXNzPSJpbWFnZSBjb2wtbWQtNCI+PGltZyBzcmM9Im1vZHVsZXMvbGVvbWFuYWdld2lkZ2V0cy9pbWcvd2VsY29tZS5wbmciIGFsdD0iIiAvPjwvZGl2Pg0KPGRpdiBjbGFzcz0id2ViX2Jsb2NrIGNvbC1tZC04IGhpZGRlbi14cyI+DQo8aDE+V2VsY29tZSAhPC9oMT4NCjxoMj5EdWlzIHNlZCBvZGlvIHNpdCBhbWV0IG5pYmggdnVscHV0YXRlIGN1cnN1cyBhIHNpdCBzb2Npb3NxdSBhZCBsaXRvcmE8L2gyPg0KPHA+TG9yZW0gaXBzdW0gZG9sb3Igc2l0IGFtZXQsIGNvbnNlY3RldHVyIGFkaXBpc2NpbmcgZWxpdC4gTnVsbGEgbWkgZXJvcywgZmFjaWxpc2lzIGFjIG1vbGxpcyBldCwgdWxsYW1jb3JwZXIgbm9uIG5lcXVlLiBDdW0gc29jaWlzIG5hdG9xdWUgcGVuYXRpYnVzIGV0IG1hZ25pcyBkaXMgcGFydHVyaWVudCBtb250ZXMsIG5hc2NldHVyIHJpZGljdWx1cyBtdXMuIFNlZCBhYyBwcmV0aXVtIGR1aS4gUHJhZXNlbnQgYXJjdSBkdWksIGNvbnZhbGxpcyBlZ2V0IGZhY2lsaXNpcyBpbiwgdnVscHV0YXRlIHV0IGxhY3VzLiBBbGlxdWFtIHVsdHJpY2llcyBsYW9yZWV0IG1hbGVzdWFkYS48L3A+DQo8L2Rpdj4NCjwvZGl2Pg0KPC9kaXY+IjtzOjEwOiJleGNlcHRpb25zIjtzOjA6IiI7czo0OiJ0YXNrIjtzOjY6ImN1c3RvbSI7czo0OiJob29rIjtzOjE3OiJkaXNwbGF5UHJvbW90ZVRvcCI7czoxOToiaWRfbGVvbWFuYWdld2lkZ2V0cyI7czoyOiIxNCI7czo3OiJpZF9zaG9wIjtzOjE6IjEiO3M6MTA6InN1Ym1pdFNhdmUiO3M6NDoiU2F2ZSI7fQ=='),
('16','LEO_ID_SHOP','1','YTo4OntzOjI6ImVuIjtzOjExOiJDdXN0b20gSFRNTCI7czoyOiJkZSI7czoxMToiQ3VzdG9tIEhUTUwiO3M6MjoiYnIiO3M6MTE6IkN1c3RvbSBIVE1MIjtzOjI6ImVzIjtzOjExOiJDdXN0b20gSFRNTCI7czoyOiJwbCI7czoxMToiQ3VzdG9tIEhUTUwiO3M6MjoicnUiO3M6MTE6IkN1c3RvbSBIVE1MIjtzOjI6Iml0IjtzOjExOiJDdXN0b20gSFRNTCI7czoyOiJubCI7czoxMToiQ3VzdG9tIEhUTUwiO30=','YToyNDp7czo4OiJ0aXRsZV9lbiI7czoxMToiQ3VzdG9tIEhUTUwiO3M6ODoidGl0bGVfZGUiO3M6MTE6IkN1c3RvbSBIVE1MIjtzOjg6InRpdGxlX2JyIjtzOjExOiJDdXN0b20gSFRNTCI7czo4OiJ0aXRsZV9lcyI7czoxMToiQ3VzdG9tIEhUTUwiO3M6ODoidGl0bGVfcGwiO3M6MTE6IkN1c3RvbSBIVE1MIjtzOjg6InRpdGxlX3J1IjtzOjExOiJDdXN0b20gSFRNTCI7czo4OiJ0aXRsZV9pdCI7czoxMToiQ3VzdG9tIEhUTUwiO3M6ODoidGl0bGVfbmwiO3M6MTE6IkN1c3RvbSBIVE1MIjtzOjEzOiJkaXNwbGF5X3RpdGxlIjtzOjE6IjAiO3M6MTA6ImFjdGl2ZV9tb2QiO3M6MToiMSI7czoxMDoiY29udGVudF9lbiI7czoxMDc6IjxkaXYgY2xhc3M9ImJsb2NrIj48YSB0aXRsZT0iIj48aW1nIHNyYz0ibW9kdWxlcy9sZW9tYW5hZ2V3aWRnZXRzL2ltZy9hZHYtc2l0ZWJhcjEuanBnIiBhbHQ9IiIgLz48L2E+PC9kaXY+IjtzOjEwOiJjb250ZW50X2RlIjtzOjA6IiI7czoxMDoiY29udGVudF9iciI7czowOiIiO3M6MTA6ImNvbnRlbnRfZXMiO3M6MDoiIjtzOjEwOiJjb250ZW50X3BsIjtzOjA6IiI7czoxMDoiY29udGVudF9ydSI7czowOiIiO3M6MTA6ImNvbnRlbnRfaXQiO3M6MDoiIjtzOjEwOiJjb250ZW50X25sIjtzOjA6IiI7czoxMDoiZXhjZXB0aW9ucyI7czowOiIiO3M6NDoidGFzayI7czo2OiJjdXN0b20iO3M6NDoiaG9vayI7czoxODoiZGlzcGxheVJpZ2h0Q29sdW1uIjtzOjE5OiJpZF9sZW9tYW5hZ2V3aWRnZXRzIjtzOjI6IjE2IjtzOjc6ImlkX3Nob3AiO3M6MToiMSI7czoxMDoic3VibWl0U2F2ZSI7czo0OiJTYXZlIjt9'),
('18','LEO_ID_SHOP','1','YTo4OntzOjI6ImVuIjtzOjEzOiJDdXN0b20gYm90dG9tIjtzOjI6ImRlIjtzOjEzOiJDdXN0b20gYm90dG9tIjtzOjI6ImJyIjtzOjEzOiJDdXN0b20gYm90dG9tIjtzOjI6ImVzIjtzOjEzOiJDdXN0b20gYm90dG9tIjtzOjI6InBsIjtzOjEzOiJDdXN0b20gYm90dG9tIjtzOjI6InJ1IjtzOjEzOiJDdXN0b20gYm90dG9tIjtzOjI6Iml0IjtzOjEzOiJDdXN0b20gYm90dG9tIjtzOjI6Im5sIjtzOjEzOiJDdXN0b20gYm90dG9tIjt9','YToyNDp7czo4OiJ0aXRsZV9lbiI7czoxMzoiQ3VzdG9tIGJvdHRvbSI7czo4OiJ0aXRsZV9kZSI7czoxMzoiQ3VzdG9tIGJvdHRvbSI7czo4OiJ0aXRsZV9iciI7czoxMzoiQ3VzdG9tIGJvdHRvbSI7czo4OiJ0aXRsZV9lcyI7czoxMzoiQ3VzdG9tIGJvdHRvbSI7czo4OiJ0aXRsZV9wbCI7czoxMzoiQ3VzdG9tIGJvdHRvbSI7czo4OiJ0aXRsZV9ydSI7czoxMzoiQ3VzdG9tIGJvdHRvbSI7czo4OiJ0aXRsZV9pdCI7czoxMzoiQ3VzdG9tIGJvdHRvbSI7czo4OiJ0aXRsZV9ubCI7czoxMzoiQ3VzdG9tIGJvdHRvbSI7czoxMzoiZGlzcGxheV90aXRsZSI7czoxOiIwIjtzOjEwOiJhY3RpdmVfbW9kIjtzOjE6IjEiO3M6MTA6ImNvbnRlbnRfZW4iO3M6OTUyOiI8ZGl2IGNsYXNzPSJsZW8tc3RhdGljIGhpZGRlbi14cyI+DQo8dWw+DQo8bGkgY2xhc3M9ImNvbC1zbS02IGNvbC1tZC0zIj4NCjxwIGNsYXNzPSJib3gtMSI+PHNwYW4gY2xhc3M9InB2LWljb24gcHYtaWNvbi1mZWF0dXJlIj5GZWFydHVyZTwvc3Bhbj48L3A+DQo8ZGl2IGNsYXNzPSJzdGF0aWMtdGV4dCI+DQo8aDMgY2xhc3M9InRpdGxlLWJsb2NrIj5GZWFydHVyZTwvaDM+DQo8cD5Mb3JlbSBpcHN1bSBkb2xvciBzaXQgYW1ldDwvcD4NCjwvZGl2Pg0KPC9saT4NCjxsaSBjbGFzcz0iY29sLXNtLTYgY29sLW1kLTMiPg0KPHAgY2xhc3M9ImJveC0yIj48c3BhbiBjbGFzcz0icHYtaWNvbiBwdi1jb24tc3VwcG9ydCI+U3VwcG9ydDwvc3Bhbj48L3A+DQo8ZGl2IGNsYXNzPSJzdGF0aWMtdGV4dCI+DQo8aDMgY2xhc3M9InRpdGxlLWJsb2NrIj5TdXBwb3J0PC9oMz4NCjxwPkxvcmVtIGlwc3VtIGRvbG9yIHNpdCBhbWV0PC9wPg0KPC9kaXY+DQo8L2xpPg0KPGxpIGNsYXNzPSJjb2wtc20tNiBjb2wtbWQtMyI+DQo8cCBjbGFzcz0iYm94LTMiPjxzcGFuIGNsYXNzPSJwdi1pY29uIHB2LWNvbi1zaGlwcGluZyI+U2hpcHBpbmc8L3NwYW4+PC9wPg0KPGRpdiBjbGFzcz0ic3RhdGljLXRleHQiPg0KPGgzIGNsYXNzPSJ0aXRsZS1ibG9jayI+RnJlZSBzaGlwcGluZzwvaDM+DQo8cD5Mb3JlbSBpcHN1bSBkb2xvciBzaXQgYW1ldDwvcD4NCjwvZGl2Pg0KPC9saT4NCjxsaSBjbGFzcz0iY29sLXNtLTYgY29sLW1kLTMiPg0KPHAgY2xhc3M9ImJveC00Ij48c3BhbiBjbGFzcz0icHYtaWNvbiBwdi1jb24tbWF1cmlzIj5NYXVyaXM8L3NwYW4+PC9wPg0KPGRpdiBjbGFzcz0ic3RhdGljLXRleHQiPg0KPGgzIGNsYXNzPSJ0aXRsZS1ibG9jayI+TWF1cmlzIG5pc2k8L2gzPg0KPHA+TG9yZW0gaXBzdW0gZG9sb3Igc2l0IGFtZXQ8L3A+DQo8L2Rpdj4NCjwvbGk+DQo8L3VsPg0KPC9kaXY+IjtzOjEwOiJjb250ZW50X2RlIjtzOjk1MjoiPGRpdiBjbGFzcz0ibGVvLXN0YXRpYyBoaWRkZW4teHMiPg0KPHVsPg0KPGxpIGNsYXNzPSJjb2wtc20tNiBjb2wtbWQtMyI+DQo8cCBjbGFzcz0iYm94LTEiPjxzcGFuIGNsYXNzPSJwdi1pY29uIHB2LWljb24tZmVhdHVyZSI+RmVhcnR1cmU8L3NwYW4+PC9wPg0KPGRpdiBjbGFzcz0ic3RhdGljLXRleHQiPg0KPGgzIGNsYXNzPSJ0aXRsZS1ibG9jayI+RmVhcnR1cmU8L2gzPg0KPHA+TG9yZW0gaXBzdW0gZG9sb3Igc2l0IGFtZXQ8L3A+DQo8L2Rpdj4NCjwvbGk+DQo8bGkgY2xhc3M9ImNvbC1zbS02IGNvbC1tZC0zIj4NCjxwIGNsYXNzPSJib3gtMiI+PHNwYW4gY2xhc3M9InB2LWljb24gcHYtY29uLXN1cHBvcnQiPlN1cHBvcnQ8L3NwYW4+PC9wPg0KPGRpdiBjbGFzcz0ic3RhdGljLXRleHQiPg0KPGgzIGNsYXNzPSJ0aXRsZS1ibG9jayI+U3VwcG9ydDwvaDM+DQo8cD5Mb3JlbSBpcHN1bSBkb2xvciBzaXQgYW1ldDwvcD4NCjwvZGl2Pg0KPC9saT4NCjxsaSBjbGFzcz0iY29sLXNtLTYgY29sLW1kLTMiPg0KPHAgY2xhc3M9ImJveC0zIj48c3BhbiBjbGFzcz0icHYtaWNvbiBwdi1jb24tc2hpcHBpbmciPlNoaXBwaW5nPC9zcGFuPjwvcD4NCjxkaXYgY2xhc3M9InN0YXRpYy10ZXh0Ij4NCjxoMyBjbGFzcz0idGl0bGUtYmxvY2siPkZyZWUgc2hpcHBpbmc8L2gzPg0KPHA+TG9yZW0gaXBzdW0gZG9sb3Igc2l0IGFtZXQ8L3A+DQo8L2Rpdj4NCjwvbGk+DQo8bGkgY2xhc3M9ImNvbC1zbS02IGNvbC1tZC0zIj4NCjxwIGNsYXNzPSJib3gtNCI+PHNwYW4gY2xhc3M9InB2LWljb24gcHYtY29uLW1hdXJpcyI+TWF1cmlzPC9zcGFuPjwvcD4NCjxkaXYgY2xhc3M9InN0YXRpYy10ZXh0Ij4NCjxoMyBjbGFzcz0idGl0bGUtYmxvY2siPk1hdXJpcyBuaXNpPC9oMz4NCjxwPkxvcmVtIGlwc3VtIGRvbG9yIHNpdCBhbWV0PC9wPg0KPC9kaXY+DQo8L2xpPg0KPC91bD4NCjwvZGl2PiI7czoxMDoiY29udGVudF9iciI7czo5NTI6IjxkaXYgY2xhc3M9Imxlby1zdGF0aWMgaGlkZGVuLXhzIj4NCjx1bD4NCjxsaSBjbGFzcz0iY29sLXNtLTYgY29sLW1kLTMiPg0KPHAgY2xhc3M9ImJveC0xIj48c3BhbiBjbGFzcz0icHYtaWNvbiBwdi1pY29uLWZlYXR1cmUiPkZlYXJ0dXJlPC9zcGFuPjwvcD4NCjxkaXYgY2xhc3M9InN0YXRpYy10ZXh0Ij4NCjxoMyBjbGFzcz0idGl0bGUtYmxvY2siPkZlYXJ0dXJlPC9oMz4NCjxwPkxvcmVtIGlwc3VtIGRvbG9yIHNpdCBhbWV0PC9wPg0KPC9kaXY+DQo8L2xpPg0KPGxpIGNsYXNzPSJjb2wtc20tNiBjb2wtbWQtMyI+DQo8cCBjbGFzcz0iYm94LTIiPjxzcGFuIGNsYXNzPSJwdi1pY29uIHB2LWNvbi1zdXBwb3J0Ij5TdXBwb3J0PC9zcGFuPjwvcD4NCjxkaXYgY2xhc3M9InN0YXRpYy10ZXh0Ij4NCjxoMyBjbGFzcz0idGl0bGUtYmxvY2siPlN1cHBvcnQ8L2gzPg0KPHA+TG9yZW0gaXBzdW0gZG9sb3Igc2l0IGFtZXQ8L3A+DQo8L2Rpdj4NCjwvbGk+DQo8bGkgY2xhc3M9ImNvbC1zbS02IGNvbC1tZC0zIj4NCjxwIGNsYXNzPSJib3gtMyI+PHNwYW4gY2xhc3M9InB2LWljb24gcHYtY29uLXNoaXBwaW5nIj5TaGlwcGluZzwvc3Bhbj48L3A+DQo8ZGl2IGNsYXNzPSJzdGF0aWMtdGV4dCI+DQo8aDMgY2xhc3M9InRpdGxlLWJsb2NrIj5GcmVlIHNoaXBwaW5nPC9oMz4NCjxwPkxvcmVtIGlwc3VtIGRvbG9yIHNpdCBhbWV0PC9wPg0KPC9kaXY+DQo8L2xpPg0KPGxpIGNsYXNzPSJjb2wtc20tNiBjb2wtbWQtMyI+DQo8cCBjbGFzcz0iYm94LTQiPjxzcGFuIGNsYXNzPSJwdi1pY29uIHB2LWNvbi1tYXVyaXMiPk1hdXJpczwvc3Bhbj48L3A+DQo8ZGl2IGNsYXNzPSJzdGF0aWMtdGV4dCI+DQo8aDMgY2xhc3M9InRpdGxlLWJsb2NrIj5NYXVyaXMgbmlzaTwvaDM+DQo8cD5Mb3JlbSBpcHN1bSBkb2xvciBzaXQgYW1ldDwvcD4NCjwvZGl2Pg0KPC9saT4NCjwvdWw+DQo8L2Rpdj4iO3M6MTA6ImNvbnRlbnRfZXMiO3M6OTUyOiI8ZGl2IGNsYXNzPSJsZW8tc3RhdGljIGhpZGRlbi14cyI+DQo8dWw+DQo8bGkgY2xhc3M9ImNvbC1zbS02IGNvbC1tZC0zIj4NCjxwIGNsYXNzPSJib3gtMSI+PHNwYW4gY2xhc3M9InB2LWljb24gcHYtaWNvbi1mZWF0dXJlIj5GZWFydHVyZTwvc3Bhbj48L3A+DQo8ZGl2IGNsYXNzPSJzdGF0aWMtdGV4dCI+DQo8aDMgY2xhc3M9InRpdGxlLWJsb2NrIj5GZWFydHVyZTwvaDM+DQo8cD5Mb3JlbSBpcHN1bSBkb2xvciBzaXQgYW1ldDwvcD4NCjwvZGl2Pg0KPC9saT4NCjxsaSBjbGFzcz0iY29sLXNtLTYgY29sLW1kLTMiPg0KPHAgY2xhc3M9ImJveC0yIj48c3BhbiBjbGFzcz0icHYtaWNvbiBwdi1jb24tc3VwcG9ydCI+U3VwcG9ydDwvc3Bhbj48L3A+DQo8ZGl2IGNsYXNzPSJzdGF0aWMtdGV4dCI+DQo8aDMgY2xhc3M9InRpdGxlLWJsb2NrIj5TdXBwb3J0PC9oMz4NCjxwPkxvcmVtIGlwc3VtIGRvbG9yIHNpdCBhbWV0PC9wPg0KPC9kaXY+DQo8L2xpPg0KPGxpIGNsYXNzPSJjb2wtc20tNiBjb2wtbWQtMyI+DQo8cCBjbGFzcz0iYm94LTMiPjxzcGFuIGNsYXNzPSJwdi1pY29uIHB2LWNvbi1zaGlwcGluZyI+U2hpcHBpbmc8L3NwYW4+PC9wPg0KPGRpdiBjbGFzcz0ic3RhdGljLXRleHQiPg0KPGgzIGNsYXNzPSJ0aXRsZS1ibG9jayI+RnJlZSBzaGlwcGluZzwvaDM+DQo8cD5Mb3JlbSBpcHN1bSBkb2xvciBzaXQgYW1ldDwvcD4NCjwvZGl2Pg0KPC9saT4NCjxsaSBjbGFzcz0iY29sLXNtLTYgY29sLW1kLTMiPg0KPHAgY2xhc3M9ImJveC00Ij48c3BhbiBjbGFzcz0icHYtaWNvbiBwdi1jb24tbWF1cmlzIj5NYXVyaXM8L3NwYW4+PC9wPg0KPGRpdiBjbGFzcz0ic3RhdGljLXRleHQiPg0KPGgzIGNsYXNzPSJ0aXRsZS1ibG9jayI+TWF1cmlzIG5pc2k8L2gzPg0KPHA+TG9yZW0gaXBzdW0gZG9sb3Igc2l0IGFtZXQ8L3A+DQo8L2Rpdj4NCjwvbGk+DQo8L3VsPg0KPC9kaXY+IjtzOjEwOiJjb250ZW50X3BsIjtzOjk1MjoiPGRpdiBjbGFzcz0ibGVvLXN0YXRpYyBoaWRkZW4teHMiPg0KPHVsPg0KPGxpIGNsYXNzPSJjb2wtc20tNiBjb2wtbWQtMyI+DQo8cCBjbGFzcz0iYm94LTEiPjxzcGFuIGNsYXNzPSJwdi1pY29uIHB2LWljb24tZmVhdHVyZSI+RmVhcnR1cmU8L3NwYW4+PC9wPg0KPGRpdiBjbGFzcz0ic3RhdGljLXRleHQiPg0KPGgzIGNsYXNzPSJ0aXRsZS1ibG9jayI+RmVhcnR1cmU8L2gzPg0KPHA+TG9yZW0gaXBzdW0gZG9sb3Igc2l0IGFtZXQ8L3A+DQo8L2Rpdj4NCjwvbGk+DQo8bGkgY2xhc3M9ImNvbC1zbS02IGNvbC1tZC0zIj4NCjxwIGNsYXNzPSJib3gtMiI+PHNwYW4gY2xhc3M9InB2LWljb24gcHYtY29uLXN1cHBvcnQiPlN1cHBvcnQ8L3NwYW4+PC9wPg0KPGRpdiBjbGFzcz0ic3RhdGljLXRleHQiPg0KPGgzIGNsYXNzPSJ0aXRsZS1ibG9jayI+U3VwcG9ydDwvaDM+DQo8cD5Mb3JlbSBpcHN1bSBkb2xvciBzaXQgYW1ldDwvcD4NCjwvZGl2Pg0KPC9saT4NCjxsaSBjbGFzcz0iY29sLXNtLTYgY29sLW1kLTMiPg0KPHAgY2xhc3M9ImJveC0zIj48c3BhbiBjbGFzcz0icHYtaWNvbiBwdi1jb24tc2hpcHBpbmciPlNoaXBwaW5nPC9zcGFuPjwvcD4NCjxkaXYgY2xhc3M9InN0YXRpYy10ZXh0Ij4NCjxoMyBjbGFzcz0idGl0bGUtYmxvY2siPkZyZWUgc2hpcHBpbmc8L2gzPg0KPHA+TG9yZW0gaXBzdW0gZG9sb3Igc2l0IGFtZXQ8L3A+DQo8L2Rpdj4NCjwvbGk+DQo8bGkgY2xhc3M9ImNvbC1zbS02IGNvbC1tZC0zIj4NCjxwIGNsYXNzPSJib3gtNCI+PHNwYW4gY2xhc3M9InB2LWljb24gcHYtY29uLW1hdXJpcyI+TWF1cmlzPC9zcGFuPjwvcD4NCjxkaXYgY2xhc3M9InN0YXRpYy10ZXh0Ij4NCjxoMyBjbGFzcz0idGl0bGUtYmxvY2siPk1hdXJpcyBuaXNpPC9oMz4NCjxwPkxvcmVtIGlwc3VtIGRvbG9yIHNpdCBhbWV0PC9wPg0KPC9kaXY+DQo8L2xpPg0KPC91bD4NCjwvZGl2PiI7czoxMDoiY29udGVudF9ydSI7czo5NTI6IjxkaXYgY2xhc3M9Imxlby1zdGF0aWMgaGlkZGVuLXhzIj4NCjx1bD4NCjxsaSBjbGFzcz0iY29sLXNtLTYgY29sLW1kLTMiPg0KPHAgY2xhc3M9ImJveC0xIj48c3BhbiBjbGFzcz0icHYtaWNvbiBwdi1pY29uLWZlYXR1cmUiPkZlYXJ0dXJlPC9zcGFuPjwvcD4NCjxkaXYgY2xhc3M9InN0YXRpYy10ZXh0Ij4NCjxoMyBjbGFzcz0idGl0bGUtYmxvY2siPkZlYXJ0dXJlPC9oMz4NCjxwPkxvcmVtIGlwc3VtIGRvbG9yIHNpdCBhbWV0PC9wPg0KPC9kaXY+DQo8L2xpPg0KPGxpIGNsYXNzPSJjb2wtc20tNiBjb2wtbWQtMyI+DQo8cCBjbGFzcz0iYm94LTIiPjxzcGFuIGNsYXNzPSJwdi1pY29uIHB2LWNvbi1zdXBwb3J0Ij5TdXBwb3J0PC9zcGFuPjwvcD4NCjxkaXYgY2xhc3M9InN0YXRpYy10ZXh0Ij4NCjxoMyBjbGFzcz0idGl0bGUtYmxvY2siPlN1cHBvcnQ8L2gzPg0KPHA+TG9yZW0gaXBzdW0gZG9sb3Igc2l0IGFtZXQ8L3A+DQo8L2Rpdj4NCjwvbGk+DQo8bGkgY2xhc3M9ImNvbC1zbS02IGNvbC1tZC0zIj4NCjxwIGNsYXNzPSJib3gtMyI+PHNwYW4gY2xhc3M9InB2LWljb24gcHYtY29uLXNoaXBwaW5nIj5TaGlwcGluZzwvc3Bhbj48L3A+DQo8ZGl2IGNsYXNzPSJzdGF0aWMtdGV4dCI+DQo8aDMgY2xhc3M9InRpdGxlLWJsb2NrIj5GcmVlIHNoaXBwaW5nPC9oMz4NCjxwPkxvcmVtIGlwc3VtIGRvbG9yIHNpdCBhbWV0PC9wPg0KPC9kaXY+DQo8L2xpPg0KPGxpIGNsYXNzPSJjb2wtc20tNiBjb2wtbWQtMyI+DQo8cCBjbGFzcz0iYm94LTQiPjxzcGFuIGNsYXNzPSJwdi1pY29uIHB2LWNvbi1tYXVyaXMiPk1hdXJpczwvc3Bhbj48L3A+DQo8ZGl2IGNsYXNzPSJzdGF0aWMtdGV4dCI+DQo8aDMgY2xhc3M9InRpdGxlLWJsb2NrIj5NYXVyaXMgbmlzaTwvaDM+DQo8cD5Mb3JlbSBpcHN1bSBkb2xvciBzaXQgYW1ldDwvcD4NCjwvZGl2Pg0KPC9saT4NCjwvdWw+DQo8L2Rpdj4iO3M6MTA6ImNvbnRlbnRfaXQiO3M6OTUyOiI8ZGl2IGNsYXNzPSJsZW8tc3RhdGljIGhpZGRlbi14cyI+DQo8dWw+DQo8bGkgY2xhc3M9ImNvbC1zbS02IGNvbC1tZC0zIj4NCjxwIGNsYXNzPSJib3gtMSI+PHNwYW4gY2xhc3M9InB2LWljb24gcHYtaWNvbi1mZWF0dXJlIj5GZWFydHVyZTwvc3Bhbj48L3A+DQo8ZGl2IGNsYXNzPSJzdGF0aWMtdGV4dCI+DQo8aDMgY2xhc3M9InRpdGxlLWJsb2NrIj5GZWFydHVyZTwvaDM+DQo8cD5Mb3JlbSBpcHN1bSBkb2xvciBzaXQgYW1ldDwvcD4NCjwvZGl2Pg0KPC9saT4NCjxsaSBjbGFzcz0iY29sLXNtLTYgY29sLW1kLTMiPg0KPHAgY2xhc3M9ImJveC0yIj48c3BhbiBjbGFzcz0icHYtaWNvbiBwdi1jb24tc3VwcG9ydCI+U3VwcG9ydDwvc3Bhbj48L3A+DQo8ZGl2IGNsYXNzPSJzdGF0aWMtdGV4dCI+DQo8aDMgY2xhc3M9InRpdGxlLWJsb2NrIj5TdXBwb3J0PC9oMz4NCjxwPkxvcmVtIGlwc3VtIGRvbG9yIHNpdCBhbWV0PC9wPg0KPC9kaXY+DQo8L2xpPg0KPGxpIGNsYXNzPSJjb2wtc20tNiBjb2wtbWQtMyI+DQo8cCBjbGFzcz0iYm94LTMiPjxzcGFuIGNsYXNzPSJwdi1pY29uIHB2LWNvbi1zaGlwcGluZyI+U2hpcHBpbmc8L3NwYW4+PC9wPg0KPGRpdiBjbGFzcz0ic3RhdGljLXRleHQiPg0KPGgzIGNsYXNzPSJ0aXRsZS1ibG9jayI+RnJlZSBzaGlwcGluZzwvaDM+DQo8cD5Mb3JlbSBpcHN1bSBkb2xvciBzaXQgYW1ldDwvcD4NCjwvZGl2Pg0KPC9saT4NCjxsaSBjbGFzcz0iY29sLXNtLTYgY29sLW1kLTMiPg0KPHAgY2xhc3M9ImJveC00Ij48c3BhbiBjbGFzcz0icHYtaWNvbiBwdi1jb24tbWF1cmlzIj5NYXVyaXM8L3NwYW4+PC9wPg0KPGRpdiBjbGFzcz0ic3RhdGljLXRleHQiPg0KPGgzIGNsYXNzPSJ0aXRsZS1ibG9jayI+TWF1cmlzIG5pc2k8L2gzPg0KPHA+TG9yZW0gaXBzdW0gZG9sb3Igc2l0IGFtZXQ8L3A+DQo8L2Rpdj4NCjwvbGk+DQo8L3VsPg0KPC9kaXY+IjtzOjEwOiJjb250ZW50X25sIjtzOjk1MjoiPGRpdiBjbGFzcz0ibGVvLXN0YXRpYyBoaWRkZW4teHMiPg0KPHVsPg0KPGxpIGNsYXNzPSJjb2wtc20tNiBjb2wtbWQtMyI+DQo8cCBjbGFzcz0iYm94LTEiPjxzcGFuIGNsYXNzPSJwdi1pY29uIHB2LWljb24tZmVhdHVyZSI+RmVhcnR1cmU8L3NwYW4+PC9wPg0KPGRpdiBjbGFzcz0ic3RhdGljLXRleHQiPg0KPGgzIGNsYXNzPSJ0aXRsZS1ibG9jayI+RmVhcnR1cmU8L2gzPg0KPHA+TG9yZW0gaXBzdW0gZG9sb3Igc2l0IGFtZXQ8L3A+DQo8L2Rpdj4NCjwvbGk+DQo8bGkgY2xhc3M9ImNvbC1zbS02IGNvbC1tZC0zIj4NCjxwIGNsYXNzPSJib3gtMiI+PHNwYW4gY2xhc3M9InB2LWljb24gcHYtY29uLXN1cHBvcnQiPlN1cHBvcnQ8L3NwYW4+PC9wPg0KPGRpdiBjbGFzcz0ic3RhdGljLXRleHQiPg0KPGgzIGNsYXNzPSJ0aXRsZS1ibG9jayI+U3VwcG9ydDwvaDM+DQo8cD5Mb3JlbSBpcHN1bSBkb2xvciBzaXQgYW1ldDwvcD4NCjwvZGl2Pg0KPC9saT4NCjxsaSBjbGFzcz0iY29sLXNtLTYgY29sLW1kLTMiPg0KPHAgY2xhc3M9ImJveC0zIj48c3BhbiBjbGFzcz0icHYtaWNvbiBwdi1jb24tc2hpcHBpbmciPlNoaXBwaW5nPC9zcGFuPjwvcD4NCjxkaXYgY2xhc3M9InN0YXRpYy10ZXh0Ij4NCjxoMyBjbGFzcz0idGl0bGUtYmxvY2siPkZyZWUgc2hpcHBpbmc8L2gzPg0KPHA+TG9yZW0gaXBzdW0gZG9sb3Igc2l0IGFtZXQ8L3A+DQo8L2Rpdj4NCjwvbGk+DQo8bGkgY2xhc3M9ImNvbC1zbS02IGNvbC1tZC0zIj4NCjxwIGNsYXNzPSJib3gtNCI+PHNwYW4gY2xhc3M9InB2LWljb24gcHYtY29uLW1hdXJpcyI+TWF1cmlzPC9zcGFuPjwvcD4NCjxkaXYgY2xhc3M9InN0YXRpYy10ZXh0Ij4NCjxoMyBjbGFzcz0idGl0bGUtYmxvY2siPk1hdXJpcyBuaXNpPC9oMz4NCjxwPkxvcmVtIGlwc3VtIGRvbG9yIHNpdCBhbWV0PC9wPg0KPC9kaXY+DQo8L2xpPg0KPC91bD4NCjwvZGl2PiI7czoxMDoiZXhjZXB0aW9ucyI7czowOiIiO3M6NDoidGFzayI7czo2OiJjdXN0b20iO3M6NDoiaG9vayI7czoxMzoiZGlzcGxheUZvb3RlciI7czoxOToiaWRfbGVvbWFuYWdld2lkZ2V0cyI7czoyOiIxOCI7czo3OiJpZF9zaG9wIjtzOjE6IjEiO3M6MTA6InN1Ym1pdFNhdmUiO3M6NDoiU2F2ZSI7fQ=='),
('19','LEO_ID_SHOP','0','YTo4OntzOjI6ImVuIjtzOjk6IkxvZ28gYmFuayI7czoyOiJkZSI7czo5OiJMb2dvIGJhbmsiO3M6MjoiYnIiO3M6OToiTG9nbyBiYW5rIjtzOjI6ImVzIjtzOjk6IkxvZ28gYmFuayI7czoyOiJwbCI7czo5OiJMb2dvIGJhbmsiO3M6MjoicnUiO3M6OToiTG9nbyBiYW5rIjtzOjI6Iml0IjtzOjk6IkxvZ28gYmFuayI7czoyOiJubCI7czo5OiJMb2dvIGJhbmsiO30=','YToyNDp7czo4OiJ0aXRsZV9lbiI7czo5OiJMb2dvIGJhbmsiO3M6ODoidGl0bGVfZGUiO3M6OToiTG9nbyBiYW5rIjtzOjg6InRpdGxlX2JyIjtzOjk6IkxvZ28gYmFuayI7czo4OiJ0aXRsZV9lcyI7czo5OiJMb2dvIGJhbmsiO3M6ODoidGl0bGVfcGwiO3M6OToiTG9nbyBiYW5rIjtzOjg6InRpdGxlX3J1IjtzOjk6IkxvZ28gYmFuayI7czo4OiJ0aXRsZV9pdCI7czo5OiJMb2dvIGJhbmsiO3M6ODoidGl0bGVfbmwiO3M6OToiTG9nbyBiYW5rIjtzOjEzOiJkaXNwbGF5X3RpdGxlIjtzOjE6IjAiO3M6MTA6ImFjdGl2ZV9tb2QiO3M6MToiMSI7czoxMDoiY29udGVudF9lbiI7czo0Mjk6IjxwIGNsYXNzPSJwdWxsLXJpZ2h0Ij48YSB0aXRsZT0icGF5cGFsMSIgaHJlZj0iIyI+PGltZyBzcmM9Im1vZHVsZXMvbGVvbWFuYWdld2lkZ2V0cy9pbWcvcGF5cGFsMS5wbmciIGFsdD0icGF5cGFsMSIgLz48L2E+IDxhIHRpdGxlPSJwYXlwYWwyIiBocmVmPSIjIj48aW1nIHNyYz0ibW9kdWxlcy9sZW9tYW5hZ2V3aWRnZXRzL2ltZy9wYXlwYWwyLnBuZyIgYWx0PSJwYXlwYWwyIiAvPjwvYT4gPGEgdGl0bGU9InBheXBhbDMiIGhyZWY9IiMiPjxpbWcgc3JjPSJtb2R1bGVzL2xlb21hbmFnZXdpZGdldHMvaW1nL3BheXBhbDMucG5nIiBhbHQ9InBheXBhbDMiIC8+PC9hPiA8YSB0aXRsZT0icGF5cGFsNCIgaHJlZj0iIyI+PGltZyBzcmM9Im1vZHVsZXMvbGVvbWFuYWdld2lkZ2V0cy9pbWcvcGF5cGFsNC5wbmciIGFsdD0icGF5cGFsNCIgLz48L2E+PC9wPiI7czoxMDoiY29udGVudF9kZSI7czo0Mjk6IjxwIGNsYXNzPSJwdWxsLXJpZ2h0Ij48YSB0aXRsZT0icGF5cGFsMSIgaHJlZj0iIyI+PGltZyBzcmM9Im1vZHVsZXMvbGVvbWFuYWdld2lkZ2V0cy9pbWcvcGF5cGFsMS5wbmciIGFsdD0icGF5cGFsMSIgLz48L2E+IDxhIHRpdGxlPSJwYXlwYWwyIiBocmVmPSIjIj48aW1nIHNyYz0ibW9kdWxlcy9sZW9tYW5hZ2V3aWRnZXRzL2ltZy9wYXlwYWwyLnBuZyIgYWx0PSJwYXlwYWwyIiAvPjwvYT4gPGEgdGl0bGU9InBheXBhbDMiIGhyZWY9IiMiPjxpbWcgc3JjPSJtb2R1bGVzL2xlb21hbmFnZXdpZGdldHMvaW1nL3BheXBhbDMucG5nIiBhbHQ9InBheXBhbDMiIC8+PC9hPiA8YSB0aXRsZT0icGF5cGFsNCIgaHJlZj0iIyI+PGltZyBzcmM9Im1vZHVsZXMvbGVvbWFuYWdld2lkZ2V0cy9pbWcvcGF5cGFsNC5wbmciIGFsdD0icGF5cGFsNCIgLz48L2E+PC9wPiI7czoxMDoiY29udGVudF9iciI7czo0Mjk6IjxwIGNsYXNzPSJwdWxsLXJpZ2h0Ij48YSB0aXRsZT0icGF5cGFsMSIgaHJlZj0iIyI+PGltZyBzcmM9Im1vZHVsZXMvbGVvbWFuYWdld2lkZ2V0cy9pbWcvcGF5cGFsMS5wbmciIGFsdD0icGF5cGFsMSIgLz48L2E+IDxhIHRpdGxlPSJwYXlwYWwyIiBocmVmPSIjIj48aW1nIHNyYz0ibW9kdWxlcy9sZW9tYW5hZ2V3aWRnZXRzL2ltZy9wYXlwYWwyLnBuZyIgYWx0PSJwYXlwYWwyIiAvPjwvYT4gPGEgdGl0bGU9InBheXBhbDMiIGhyZWY9IiMiPjxpbWcgc3JjPSJtb2R1bGVzL2xlb21hbmFnZXdpZGdldHMvaW1nL3BheXBhbDMucG5nIiBhbHQ9InBheXBhbDMiIC8+PC9hPiA8YSB0aXRsZT0icGF5cGFsNCIgaHJlZj0iIyI+PGltZyBzcmM9Im1vZHVsZXMvbGVvbWFuYWdld2lkZ2V0cy9pbWcvcGF5cGFsNC5wbmciIGFsdD0icGF5cGFsNCIgLz48L2E+PC9wPiI7czoxMDoiY29udGVudF9lcyI7czo0Mjk6IjxwIGNsYXNzPSJwdWxsLXJpZ2h0Ij48YSB0aXRsZT0icGF5cGFsMSIgaHJlZj0iIyI+PGltZyBzcmM9Im1vZHVsZXMvbGVvbWFuYWdld2lkZ2V0cy9pbWcvcGF5cGFsMS5wbmciIGFsdD0icGF5cGFsMSIgLz48L2E+IDxhIHRpdGxlPSJwYXlwYWwyIiBocmVmPSIjIj48aW1nIHNyYz0ibW9kdWxlcy9sZW9tYW5hZ2V3aWRnZXRzL2ltZy9wYXlwYWwyLnBuZyIgYWx0PSJwYXlwYWwyIiAvPjwvYT4gPGEgdGl0bGU9InBheXBhbDMiIGhyZWY9IiMiPjxpbWcgc3JjPSJtb2R1bGVzL2xlb21hbmFnZXdpZGdldHMvaW1nL3BheXBhbDMucG5nIiBhbHQ9InBheXBhbDMiIC8+PC9hPiA8YSB0aXRsZT0icGF5cGFsNCIgaHJlZj0iIyI+PGltZyBzcmM9Im1vZHVsZXMvbGVvbWFuYWdld2lkZ2V0cy9pbWcvcGF5cGFsNC5wbmciIGFsdD0icGF5cGFsNCIgLz48L2E+PC9wPiI7czoxMDoiY29udGVudF9wbCI7czo0Mjk6IjxwIGNsYXNzPSJwdWxsLXJpZ2h0Ij48YSB0aXRsZT0icGF5cGFsMSIgaHJlZj0iIyI+PGltZyBzcmM9Im1vZHVsZXMvbGVvbWFuYWdld2lkZ2V0cy9pbWcvcGF5cGFsMS5wbmciIGFsdD0icGF5cGFsMSIgLz48L2E+IDxhIHRpdGxlPSJwYXlwYWwyIiBocmVmPSIjIj48aW1nIHNyYz0ibW9kdWxlcy9sZW9tYW5hZ2V3aWRnZXRzL2ltZy9wYXlwYWwyLnBuZyIgYWx0PSJwYXlwYWwyIiAvPjwvYT4gPGEgdGl0bGU9InBheXBhbDMiIGhyZWY9IiMiPjxpbWcgc3JjPSJtb2R1bGVzL2xlb21hbmFnZXdpZGdldHMvaW1nL3BheXBhbDMucG5nIiBhbHQ9InBheXBhbDMiIC8+PC9hPiA8YSB0aXRsZT0icGF5cGFsNCIgaHJlZj0iIyI+PGltZyBzcmM9Im1vZHVsZXMvbGVvbWFuYWdld2lkZ2V0cy9pbWcvcGF5cGFsNC5wbmciIGFsdD0icGF5cGFsNCIgLz48L2E+PC9wPiI7czoxMDoiY29udGVudF9ydSI7czo0Mjk6IjxwIGNsYXNzPSJwdWxsLXJpZ2h0Ij48YSB0aXRsZT0icGF5cGFsMSIgaHJlZj0iIyI+PGltZyBzcmM9Im1vZHVsZXMvbGVvbWFuYWdld2lkZ2V0cy9pbWcvcGF5cGFsMS5wbmciIGFsdD0icGF5cGFsMSIgLz48L2E+IDxhIHRpdGxlPSJwYXlwYWwyIiBocmVmPSIjIj48aW1nIHNyYz0ibW9kdWxlcy9sZW9tYW5hZ2V3aWRnZXRzL2ltZy9wYXlwYWwyLnBuZyIgYWx0PSJwYXlwYWwyIiAvPjwvYT4gPGEgdGl0bGU9InBheXBhbDMiIGhyZWY9IiMiPjxpbWcgc3JjPSJtb2R1bGVzL2xlb21hbmFnZXdpZGdldHMvaW1nL3BheXBhbDMucG5nIiBhbHQ9InBheXBhbDMiIC8+PC9hPiA8YSB0aXRsZT0icGF5cGFsNCIgaHJlZj0iIyI+PGltZyBzcmM9Im1vZHVsZXMvbGVvbWFuYWdld2lkZ2V0cy9pbWcvcGF5cGFsNC5wbmciIGFsdD0icGF5cGFsNCIgLz48L2E+PC9wPiI7czoxMDoiY29udGVudF9pdCI7czo0Mjk6IjxwIGNsYXNzPSJwdWxsLXJpZ2h0Ij48YSB0aXRsZT0icGF5cGFsMSIgaHJlZj0iIyI+PGltZyBzcmM9Im1vZHVsZXMvbGVvbWFuYWdld2lkZ2V0cy9pbWcvcGF5cGFsMS5wbmciIGFsdD0icGF5cGFsMSIgLz48L2E+IDxhIHRpdGxlPSJwYXlwYWwyIiBocmVmPSIjIj48aW1nIHNyYz0ibW9kdWxlcy9sZW9tYW5hZ2V3aWRnZXRzL2ltZy9wYXlwYWwyLnBuZyIgYWx0PSJwYXlwYWwyIiAvPjwvYT4gPGEgdGl0bGU9InBheXBhbDMiIGhyZWY9IiMiPjxpbWcgc3JjPSJtb2R1bGVzL2xlb21hbmFnZXdpZGdldHMvaW1nL3BheXBhbDMucG5nIiBhbHQ9InBheXBhbDMiIC8+PC9hPiA8YSB0aXRsZT0icGF5cGFsNCIgaHJlZj0iIyI+PGltZyBzcmM9Im1vZHVsZXMvbGVvbWFuYWdld2lkZ2V0cy9pbWcvcGF5cGFsNC5wbmciIGFsdD0icGF5cGFsNCIgLz48L2E+PC9wPiI7czoxMDoiY29udGVudF9ubCI7czo0Mjk6IjxwIGNsYXNzPSJwdWxsLXJpZ2h0Ij48YSB0aXRsZT0icGF5cGFsMSIgaHJlZj0iIyI+PGltZyBzcmM9Im1vZHVsZXMvbGVvbWFuYWdld2lkZ2V0cy9pbWcvcGF5cGFsMS5wbmciIGFsdD0icGF5cGFsMSIgLz48L2E+IDxhIHRpdGxlPSJwYXlwYWwyIiBocmVmPSIjIj48aW1nIHNyYz0ibW9kdWxlcy9sZW9tYW5hZ2V3aWRnZXRzL2ltZy9wYXlwYWwyLnBuZyIgYWx0PSJwYXlwYWwyIiAvPjwvYT4gPGEgdGl0bGU9InBheXBhbDMiIGhyZWY9IiMiPjxpbWcgc3JjPSJtb2R1bGVzL2xlb21hbmFnZXdpZGdldHMvaW1nL3BheXBhbDMucG5nIiBhbHQ9InBheXBhbDMiIC8+PC9hPiA8YSB0aXRsZT0icGF5cGFsNCIgaHJlZj0iIyI+PGltZyBzcmM9Im1vZHVsZXMvbGVvbWFuYWdld2lkZ2V0cy9pbWcvcGF5cGFsNC5wbmciIGFsdD0icGF5cGFsNCIgLz48L2E+PC9wPiI7czoxMDoiZXhjZXB0aW9ucyI7czowOiIiO3M6NDoidGFzayI7czo2OiJjdXN0b20iO3M6NDoiaG9vayI7czoxNDoiZGlzcGxheUZvb3ROYXYiO3M6MTk6ImlkX2xlb21hbmFnZXdpZGdldHMiO3M6MjoiMTkiO3M6NzoiaWRfc2hvcCI7czoxOiIxIjtzOjEwOiJzdWJtaXRTYXZlIjtzOjQ6IlNhdmUiO30=');
";