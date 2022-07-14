import CodeEditor from "./models/CodeEditor";

app.initializers.add('omerfdmrl-codeEditor', () => {
  app.store.models['omerfdmrl-codeEditor'] = CodeEditor
});
