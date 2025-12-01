**PNV27 Mentoring Group**

This repository contains materials and guidance for the PNV27 mentoring group. It serves as a central place for hands-on exercises, reference implementations, and structured learning paths across core deep-tech topics.

**PNV27 Members**:
- **Tiết**
- **Đàn**
- **Như**
- **Đạt**

**Purpose**:
This repository is designed to help PNV27 members strengthen their core engineering skills through practical, real-world topics. Each topic includes theory summaries, sample implementations, exercises, and review tasks. The focus areas include:
- Authentication
- Authorization
- CORS & CSRF
- API Design & Error Handling
- DDoS Protection & reCaptcha
- Caching Techniques
Each topic folder will progressively include exercises, sample code, and notes

**Repository Structure**
- `README.md`: This file - overview, git conventions, and onboarding tips.
- Other folders: will contain sample code, and notes (added progressively).

**Git Conventions (for new people)**
- **Branches**: Use clear branch names:
  - `feature/<ticket>-short-desc` for new features or exercises
  - `fix/<ticket>-short-desc` for bug fixes or corrections
  - `chore/<desc>` for maintenance tasks
  - `docs/<desc>` for documentation changes
- **Commit messages**: Use an imperative, concise subject. Optionally include a scope.
  - Format: `type(scope): short-summary` (e.g., `feat(exercise-1): add solution for task A`)
  - Types: `feat`, `fix`, `docs`, `chore`, `refactor`, `test`
- **Pull Requests**:
  - Open PRs against the `develop` branch (or `main` if no `develop` branch exists).
  - Provide a short description, the purpose of the change, and any manual steps to verify.
  - Assign reviewers and request at least one approval before merging.
  - Prefer small, focused PRs that are easy to review.

**Basic Git Knowledge - Recommended for everyone**
- Clone the repo:

```powershell
git clone <repo-url>
```

- Keep your local branches up to date:

```powershell
git checkout develop
git pull origin develop
```

- Create and switch to a branch:

```powershell
git checkout -b feature/JIRA-123-short-desc
```

- Add, commit, and push:

```powershell
git add .
git commit -m "feat(scope): short message"
git push -u origin feature/JIRA-123-short-desc
```

- Update your branch with latest upstream changes (choose merge or rebase based on team preference):

```powershell
git fetch origin
git rebase origin/develop   # or `git merge origin/develop`
```

- Useful commands to learn soon:
  - `git status`, `git log --oneline --graph --all`, `git diff`
  - `git stash` (saving work temporarily)
  - `git reset --soft` vs `--hard` (use carefully)
  - `git cherry-pick`, `git revert` (apply or undo commits)
  - `git tag` (release markers)

**Onboarding checklist for new members**
- Fork or clone the repository.
- Read this `README.md` and check the `contributing.md` if present.
- Set your Git user name and email:

```powershell
git config --global user.name "Your Name"
git config --global user.email "you@example.com"
```

- Create a feature branch for your first contribution and open a PR when ready.
- Ask a mentor for a quick walkthrough if you're unsure about the workflow.

**Best Practices**
- Make small, focused commits with meaningful messages.
- Keep PRs small and include steps to verify changes.
- If you need help, open an issue or ask a mentor rather than making large speculative changes.

**Learning Resources**
- Pro Git book: https://git-scm.com/book/en/v2
- Interactive tutorials: https://learngitbranching.js.org/
- Short reference: `git --help` or `git help <command>`