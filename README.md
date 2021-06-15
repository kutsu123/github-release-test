# github-release-test
github-actionsのテストです。
リリースまで進行しやすいようにgithub actionsを設定していくためのテスト領域です

## 開発ルールなど
デフォルトブランチはdevにし、基本的にdevからブランチを切って作業していきます。
（git flowからいくつかオリジナルルールを加えた方式です）

- dev（デフォルト：開発の親ブランチ ※このブランチを直接操作はしない）
- main（リリースブランチ、最新のリリースと必ず同じになる ※このブランチを直接操作はしない）
- feature/xxxx（devから切る開発タスク用のブランチ）

※リリースブランチは存在せず、devとmainのつなぎはPRでおこなってます

### 開発の１例
1. devからfeature/hogehogeブランチを切る
2. feature/hogehogeブランチにて開発作業
3. devへのPR
4. devへPRがマージされた時点でrelease-xxxxxというPRが自動生成される
5. release PRをmainにマージすると自動的にリリース処理が走る
	- PRタイトルをタグ追加する
	- PR内容をリリースノートとして追加する
	- リリースにzipを追加

## その他
準備中
