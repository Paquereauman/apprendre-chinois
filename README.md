<div align="center">

# 你好 · Apprendre le chinois

### Un parcours **A1 → B1** pour apprendre le mandarin en français — vocabulaire, tons, grammaire, caractères.

![niveaux](https://img.shields.io/badge/niveaux-A1%20%C2%B7%20A2%20%C2%B7%20B1-e63946?style=for-the-badge)
![mots](https://img.shields.io/badge/vocabulaire-~900%20mots-f4a300?style=for-the-badge)
![audio](https://img.shields.io/badge/audio-1%C2%A0319%20MP3-2bb673?style=for-the-badge)
![zero dependance](https://img.shields.io/badge/d%C3%A9pendances-0-457b9d?style=for-the-badge)

**Une seule page web. Aucun framework. Fonctionne sur ordinateur et téléphone.**

### 👉 [Ouvrir l'application](https://paquereauman.github.io/apprendre-chinois/)

</div>

---

## ✨ Ce que fait l'application

| | |
|---|---|
| 🗺️ **Parcours guidé** | 3 niveaux (A1, A2, B1) en étapes logiques, avec un bandeau « prochaine étape » et un tableau de bord (niveau, XP, série de jours, objectif du jour, date estimée de fin). |
| ⭐ **Priorités** | Choisis les thèmes à travailler en premier (ex. *Se présenter, Restaurant, Fruits & légumes, Taxi*) : ils passent devant dans les révisions et le plan. |
| 🎧 **Gym des tons** | 8 étapes progressives, courbes de ton **animées** synchronisées avec le son, comparaison de ton choix et du bon ton, puis mots de 2 syllabes. |
| 🔍 **Infobulles** | Survole (ou touche) un caractère **ou son pinyin** : le **mot** et son sens, la **combinaison** de ses caractères (ex. 买单 = acheter + note → l'addition), puis le caractère survolé avec ses **composants** (radical + phonétique) et une **astuce mnémotechnique** (ex. 好 = une femme 女 avec son enfant 子). Plus de 800 caractères expliqués en français. |
| ❓ **Quiz variés** | Dictée, pinyin à taper (**mode facile** : première lettre affichée ; **mode difficile** : aucune aide), phrases à trous, phrases à remettre en ordre, courbes de tons, et bouton **« Je ne sais pas »** sans pénalité. |
| 🔁 **Répétition espacée** | Les mots reviennent à 1, 2, 4, 8, 16 puis 32 jours. Un mot n'est « connu » qu'après **2 réussites dans 2 types de questions différents**. |
| 📝 **Test de niveau** | 2 questions par mot, résultats prudents, estimation honnête du temps restant selon ton rythme (mots par jour ou par semaine). |
| 🧱 **Grammaire** | 15 + 16 + 16 **leçons indépendantes**, placées dans le parcours à côté du vocabulaire qui leur est lié (ex. « Mots interrogatifs » près du thème *Poser des questions*), chacune avec son exercice d'ordre des mots ; 15 + 16 + 16 leçons avec exemples sonorisés, exercice d'ordre des mots, nuances entre verbes proches (去/来, 借/还, 遇到/碰到…). |
| 🈶 **Caractères** | Logique et philosophie de l'écriture, ordre des traits, 50 caractères à tracer à la main. |
| 🎙️ **Voix d'homme naturelle** | 1 319 MP3 pré-générés (voix neuronale Yunxi) ; repli automatique sur la voix du navigateur. |
| 👤 **Compte & sauvegarde sans perte** | Un nom + un mot de passe (clé dérivée dans le navigateur, jamais envoyée en clair) pour retrouver ta progression sur tous tes appareils ; fusion intelligente et copies de secours. Proposé dès la première visite. |
| 🏆 **Classement** | Page réservée aux inscrits, **sur inscription volontaire** : nom, avatar, XP, mots acquis et série ; on peut le quitter à tout moment. |
| 🧑‍🎤 **Avatar personnalisable** | 19 coupes, 15 chapeaux (斗笠, oreilles de panda ou de chat, chapeau de mandarin, baguettes à cheveux…), yeux (amande, kawaii, étoiles, cœurs…), bouches, lunettes, barbes, visage (masque chirurgical, peinture d'opéra de Pékin…), habits (col mandarin, hanfu, qipao…), couleurs de cheveux, de peau et de fond. |
| 🧭 **Accueil épuré** | Sélecteur de niveau, trois cartes (niveau, objectif du jour, parcours), actions rapides (continuer, révision du jour, priorités) et chapitres en grille régulière, sur ordinateur comme sur téléphone. |

## 📚 Contenu

| Niveau | Thèmes | Vocabulaire | Grammaire |
|---|---|---|---|
| **A1** | 28 (salutations, restaurant, train, taxi, médecin, nombres, famille, corps…) | ~420 mots | 15 leçons + pinyin & tons |
| **A2** | 17 (routine, sentiments, shopping, santé, transports, urgences, pays…) | ~265 mots | 16 leçons |
| **B1** | 14 (connecteurs, opinions, travail, banque, environnement, fêtes, cuisine…) | ~225 mots | 16 leçons |

Chaque thème contient aussi **3 phrases utiles** qui ne comptent pas dans la progression.

## 🌐 Hébergement

- **Application** : GitHub Pages — https://paquereauman.github.io/apprendre-chinois/
- **Sauvegarde de la progression** : petite API PHP sur un VPS, en HTTPS, avec CORS limité à `paquereauman.github.io` (`server/`). Sans elle, l'application fonctionne quand même : la progression reste dans le navigateur (export/import possible).
- La progression est liée à ton **compte** (nom + mot de passe). Sans compte, un code aléatoire est créé par navigateur.
- Le **classement** passe par la même API (`?rank=1`) : seules les données des inscrits volontaires sont exposées, et les statistiques sont relues côté serveur dans leur fichier de progression.

## 🚀 Démarrer

```bash
# Option 1 — ouvrir directement
# double-clic sur index.html

# Option 2 — serveur local (nécessaire pour l'audio MP3 et la sauvegarde serveur)
python -m http.server 8000
# puis http://localhost:8000
```

Sans serveur, tout fonctionne sauf les MP3 (la synthèse vocale du navigateur prend le relais) et la sauvegarde distante.

## 🗂️ Structure

```
index.html              toute l'application (données + interface + logique)
audio/                  MP3 + map.json (texte → fichier)
server/api.php          API de sauvegarde et de classement (PHP, un JSON par clé secrète)
server/nginx-chinois-api.conf  exemple de configuration nginx (HTTPS + CORS)
server/backup-*.sh      sauvegarde périodique du dossier de données
manifest.webmanifest    icône et ajout à l'écran d'accueil
```

## 🆕 Dernières modifications

- Infobulles reprises : mot → combinaison → caractère, sens français pour ~600 caractères qui n'apparaissent que dans des mots composés, ~340 astuces mnémotechniques, phrases courtes découpées en mots.
- Accueil entièrement refait (cartes, barres fines, grille régulière).
- Avatar : nombreuses nouvelles options, dont des éléments asiatiques et farfelus.
- Comptes avec invitation à la première visite, et classement des inscrits.

## 🧠 Choix pédagogiques

- **Les tons s'apprennent avec la courbe**, pas avec des accents : 2 tons d'abord, puis 3, puis 4.
- **Le ton se retient avec un mot** : un mot repère pour chacune des 16 combinaisons.
- **Pas de confirmation au hasard** : « Je ne sais pas » + double réussite avant de valider un mot.
- **Les doublons entre thèmes sont signalés** (🔁) et se valident ensemble.

## 🙏 Crédits

- Décomposition des caractères : [Make Me a Hanzi](https://github.com/skishore/makemeahanzi) (données libres).
- Tracé animé des caractères : [Hanzi Writer](https://hanziwriter.org/).
- Voix : synthèse neuronale Microsoft via [`edge-tts`](https://github.com/rany2/edge-tts).
- Pinyin vérifié automatiquement avec [`pypinyin`](https://github.com/mozillazg/python-pinyin).

> ⚠️ Contenu pédagogique rédigé avec l'aide d'une IA : une relecture par un locuteur chinois est recommandée pour les phrases et traductions.

<div align="center">

*加油！ — Courage !*

</div>
