<?php
/*
 * Copyright (c) 2017-2025 Tencent. All Rights Reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *    http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */
namespace TencentCloud\Cls\V20201016\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Index description information of the field for which key-value index needs to be enabled
 *
 * @method string getType() Obtain Field type. Supported types: long, text, double, json.
Note: The json data type is currently supported by partial users or log topics. If needed, contact us to enable the allowlist.
 * @method void setType(string $Type) Set Field type. Supported types: long, text, double, json.
Note: The json data type is currently supported by partial users or log topics. If needed, contact us to enable the allowlist.
 * @method string getTokenizer() Obtain Separator of fields. Each character represents a separator.
Only symbols, \n\t\r, and escape character \ are supported.
`long` and `double` fields need to be null.
Note: \n\t\r can be directly enclosed in double quotes as the input parameter without escaping. When debugging with API Explorer, use the JSON parameter input method to avoid repeated escaping of \n\t\r.
 * @method void setTokenizer(string $Tokenizer) Set Separator of fields. Each character represents a separator.
Only symbols, \n\t\r, and escape character \ are supported.
`long` and `double` fields need to be null.
Note: \n\t\r can be directly enclosed in double quotes as the input parameter without escaping. When debugging with API Explorer, use the JSON parameter input method to avoid repeated escaping of \n\t\r.
 * @method boolean getSqlFlag() Obtain Whether the analysis feature is enabled for the field
 * @method void setSqlFlag(boolean $SqlFlag) Set Whether the analysis feature is enabled for the field
 * @method boolean getContainZH() Obtain Whether to include node data. Set this parameter to false for the long and double fields.
 * @method void setContainZH(boolean $ContainZH) Set Whether to include node data. Set this parameter to false for the long and double fields.
 * @method string getAlias() Obtain field alias
 * @method void setAlias(string $Alias) Set field alias
 * @method boolean getOpenIndexForChildOnly() Obtain Enable index only for sub-node. This field is not enabled.
Note: Only json type fields can configure this parameter.
 * @method void setOpenIndexForChildOnly(boolean $OpenIndexForChildOnly) Set Enable index only for sub-node. This field is not enabled.
Note: Only json type fields can configure this parameter.
 * @method array getChildNode() Obtain subnode list
Note: Only json type fields can configure this parameter.
 * @method void setChildNode(array $ChildNode) Set subnode list
Note: Only json type fields can configure this parameter.
 */
class ValueInfo extends AbstractModel
{
    /**
     * @var string Field type. Supported types: long, text, double, json.
Note: The json data type is currently supported by partial users or log topics. If needed, contact us to enable the allowlist.
     */
    public $Type;

    /**
     * @var string Separator of fields. Each character represents a separator.
Only symbols, \n\t\r, and escape character \ are supported.
`long` and `double` fields need to be null.
Note: \n\t\r can be directly enclosed in double quotes as the input parameter without escaping. When debugging with API Explorer, use the JSON parameter input method to avoid repeated escaping of \n\t\r.
     */
    public $Tokenizer;

    /**
     * @var boolean Whether the analysis feature is enabled for the field
     */
    public $SqlFlag;

    /**
     * @var boolean Whether to include node data. Set this parameter to false for the long and double fields.
     */
    public $ContainZH;

    /**
     * @var string field alias
     */
    public $Alias;

    /**
     * @var boolean Enable index only for sub-node. This field is not enabled.
Note: Only json type fields can configure this parameter.
     */
    public $OpenIndexForChildOnly;

    /**
     * @var array subnode list
Note: Only json type fields can configure this parameter.
     */
    public $ChildNode;

    /**
     * @param string $Type Field type. Supported types: long, text, double, json.
Note: The json data type is currently supported by partial users or log topics. If needed, contact us to enable the allowlist.
     * @param string $Tokenizer Separator of fields. Each character represents a separator.
Only symbols, \n\t\r, and escape character \ are supported.
`long` and `double` fields need to be null.
Note: \n\t\r can be directly enclosed in double quotes as the input parameter without escaping. When debugging with API Explorer, use the JSON parameter input method to avoid repeated escaping of \n\t\r.
     * @param boolean $SqlFlag Whether the analysis feature is enabled for the field
     * @param boolean $ContainZH Whether to include node data. Set this parameter to false for the long and double fields.
     * @param string $Alias field alias
     * @param boolean $OpenIndexForChildOnly Enable index only for sub-node. This field is not enabled.
Note: Only json type fields can configure this parameter.
     * @param array $ChildNode subnode list
Note: Only json type fields can configure this parameter.
     */
    function __construct()
    {

    }

    /**
     * For internal only. DO NOT USE IT.
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Tokenizer",$param) and $param["Tokenizer"] !== null) {
            $this->Tokenizer = $param["Tokenizer"];
        }

        if (array_key_exists("SqlFlag",$param) and $param["SqlFlag"] !== null) {
            $this->SqlFlag = $param["SqlFlag"];
        }

        if (array_key_exists("ContainZH",$param) and $param["ContainZH"] !== null) {
            $this->ContainZH = $param["ContainZH"];
        }

        if (array_key_exists("Alias",$param) and $param["Alias"] !== null) {
            $this->Alias = $param["Alias"];
        }

        if (array_key_exists("OpenIndexForChildOnly",$param) and $param["OpenIndexForChildOnly"] !== null) {
            $this->OpenIndexForChildOnly = $param["OpenIndexForChildOnly"];
        }

        if (array_key_exists("ChildNode",$param) and $param["ChildNode"] !== null) {
            $this->ChildNode = [];
            foreach ($param["ChildNode"] as $key => $value){
                $obj = new KeyValueInfo();
                $obj->deserialize($value);
                array_push($this->ChildNode, $obj);
            }
        }
    }
}
