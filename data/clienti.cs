using System;
using System.Collections;
using System.Collections.Generic;
using System.Text;
namespace Db_gestionale
{
    #region Clienti
    public class Clienti
    {
        #region Member Variables
        protected bool _id;
        protected string _nome;
        protected bool _anni;
        protected string _provincia;
        #endregion
        #region Constructors
        public Clienti() { }
        public Clienti(string nome, bool anni, string provincia)
        {
            this._nome=nome;
            this._anni=anni;
            this._provincia=provincia;
        }
        #endregion
        #region Public Properties
        public virtual bool Id
        {
            get {return _id;}
            set {_id=value;}
        }
        public virtual string Nome
        {
            get {return _nome;}
            set {_nome=value;}
        }
        public virtual bool Anni
        {
            get {return _anni;}
            set {_anni=value;}
        }
        public virtual string Provincia
        {
            get {return _provincia;}
            set {_provincia=value;}
        }
        #endregion
    }
    #endregion
}