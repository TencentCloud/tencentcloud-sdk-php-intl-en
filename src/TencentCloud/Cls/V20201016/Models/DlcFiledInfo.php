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
 * Data Lake Computing Service (Data Lake Compute, DLC) data field configuration message
 *
 * @method string getClsField() Obtain <p>Field name in the cls log</p>
 * @method void setClsField(string $ClsField) Set <p>Field name in the cls log</p>
 * @method string getDlcField() Obtain <p>Column name of the data lake computing service table</p>
 * @method void setDlcField(string $DlcField) Set <p>Column name of the data lake computing service table</p>
 * @method string getDlcFieldType() Obtain <p>Data lake computing service field Type</p><p>Enumeration value:</p><ul><li>int|string|struct: See <a href="https://www.tencentcloud.com/document/product/1342/53778?from_cn_redirect=1#Column">Type definition in DLC Column</a></li></ul>
 * @method void setDlcFieldType(string $DlcFieldType) Set <p>Data lake computing service field Type</p><p>Enumeration value:</p><ul><li>int|string|struct: See <a href="https://www.tencentcloud.com/document/product/1342/53778?from_cn_redirect=1#Column">Type definition in DLC Column</a></li></ul>
 * @method string getFillField() Obtain <p>Parsing failure padding field</p>
 * @method void setFillField(string $FillField) Set <p>Parsing failure padding field</p>
 * @method boolean getDisable() Obtain <p>Whether to disable</p>
 * @method void setDisable(boolean $Disable) Set <p>Whether to disable</p>
 */
class DlcFiledInfo extends AbstractModel
{
    /**
     * @var string <p>Field name in the cls log</p>
     */
    public $ClsField;

    /**
     * @var string <p>Column name of the data lake computing service table</p>
     */
    public $DlcField;

    /**
     * @var string <p>Data lake computing service field Type</p><p>Enumeration value:</p><ul><li>int|string|struct: See <a href="https://www.tencentcloud.com/document/product/1342/53778?from_cn_redirect=1#Column">Type definition in DLC Column</a></li></ul>
     */
    public $DlcFieldType;

    /**
     * @var string <p>Parsing failure padding field</p>
     */
    public $FillField;

    /**
     * @var boolean <p>Whether to disable</p>
     */
    public $Disable;

    /**
     * @param string $ClsField <p>Field name in the cls log</p>
     * @param string $DlcField <p>Column name of the data lake computing service table</p>
     * @param string $DlcFieldType <p>Data lake computing service field Type</p><p>Enumeration value:</p><ul><li>int|string|struct: See <a href="https://www.tencentcloud.com/document/product/1342/53778?from_cn_redirect=1#Column">Type definition in DLC Column</a></li></ul>
     * @param string $FillField <p>Parsing failure padding field</p>
     * @param boolean $Disable <p>Whether to disable</p>
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
        if (array_key_exists("ClsField",$param) and $param["ClsField"] !== null) {
            $this->ClsField = $param["ClsField"];
        }

        if (array_key_exists("DlcField",$param) and $param["DlcField"] !== null) {
            $this->DlcField = $param["DlcField"];
        }

        if (array_key_exists("DlcFieldType",$param) and $param["DlcFieldType"] !== null) {
            $this->DlcFieldType = $param["DlcFieldType"];
        }

        if (array_key_exists("FillField",$param) and $param["FillField"] !== null) {
            $this->FillField = $param["FillField"];
        }

        if (array_key_exists("Disable",$param) and $param["Disable"] !== null) {
            $this->Disable = $param["Disable"];
        }
    }
}
