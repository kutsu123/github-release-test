[![Create Release](https://github.com/kutsu123/github-release-test/actions/workflows/release.yml/badge.svg?branch=dev)](https://github.com/kutsu123/github-release-test/actions/workflows/release.yml)

# github-release-test
github-actionsのテストです。
リリースまで進行しやすいようにgithub actionsを設定していくためのテスト領域です

## github Actionsで実行していること
- devへのプルリクがマージされた時点でリリース用のPRを自動作成（to main）
- mainへのプルリクがマージされた時点にリリース処理
	- scssのコンパイル
	- タグを追加（タグ名はPRタイトル）
	- リリースノートを追加（内容はPRの内容）
	- zipを生成しリリースに添付
	- devブランチにPRを自動生成

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
3. devへのPRを出す（手動）
4. devへPRがマージされた時点で `release 候補 - {日付}` というPRが自動生成される
5. release PRをmainにマージすると自動的にリリース処理が走る
	- PRタイトルをタグ追加する
	- PR内容をリリースノートとして追加する
	- リリースにzipを追加
	- devブランチにPRが自動生成される
6. `リリース残処理：mainの内容をdevへ反映` のPRをマージしdevを最新の状態にする

## Changelog
v0.0.3 tagPRにてvを抜いたバージョンが発行できるかテスト
v0.0.2 新しいtagpr Actionのテスト
v0.0.1 新しいtagpr Actionのテスト
v0.0.0.21 新しいtagpr Actionのテスト
v0.0.0.20 新しいtagpr Actionのテスト
v0.0.0.19 リリース失敗したので再リリース用にバージョンアップ
v0.0.0.18 pr-release修正
v0.0.0.17 pr-release修正
v0.0.0.16 pr-release修正
v0.0.0.15 アップデートテスト
v0.0.0.14 アップデートテスト