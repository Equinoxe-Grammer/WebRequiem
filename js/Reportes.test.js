const { validarEmail } = require('./Reportes');

describe('validarEmail', () => {
  beforeEach(() => {
    document.body.innerHTML = '<input id="email" />';
    window.alert = jest.fn();
  });

  test('rechaza correos sin dominio', () => {
    document.getElementById('email').value = 'user@';
    expect(validarEmail()).toBe(false);
  });

  test('rechaza correos con múltiples @', () => {
    document.getElementById('email').value = 'user@@example.com';
    expect(validarEmail()).toBe(false);
  });

  test('rechaza correos con caracteres inválidos', () => {
    document.getElementById('email').value = 'user@domain!.com';
    expect(validarEmail()).toBe(false);
  });

  test('acepta un correo válido', () => {
    document.getElementById('email').value = 'user@example.com';
    expect(validarEmail()).toBe(true);
  });
});
