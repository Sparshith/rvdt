from xml.dom import minidom
posn_map = {1 : 'OG', 2 : 'OO', 3 : 'CG', 4 : 'CO'}
round_id = 1
xmldoc = minidom.parse('teams1-main.xml')
itemlist = xmldoc.getElementsByTagName('team')
team_map = {}
for s in itemlist:
    team_map[s.attributes['ident'].value] = s.attributes['name'].value
#print(team_map)

xmldoc = minidom.parse('adjudicators1-main.xml')
itemlist = xmldoc.getElementsByTagName('adjud')
adj_map = {}
for s in itemlist:
    adj_map[s.attributes['id'].value] = s.attributes['name'].value

#print(adj_map)

xmldoc = minidom.parse('debates1-main.xml')
itemlist = xmldoc.getElementsByTagName('debate')

print("Match Ups\n")

for s in itemlist:
    match_id = s.attributes['venue'].value
    team_list = s.getElementsByTagName('team')
    posn = 0
    for a in team_list:
    	posn = posn + 1
    	team_id = a.attributes['id'].value
    	print(round_id, match_id, team_map[team_id], posn_map[posn])
    print('\n')

print("Adjes\n")
itemlist = xmldoc.getElementsByTagName('pair')

for s in itemlist:
	match_id = s.attributes['venue'].value
	adj_id = s.attributes['adj'].value
	print(round_id, match_id, adj_map[adj_id])


#print(itemlist)