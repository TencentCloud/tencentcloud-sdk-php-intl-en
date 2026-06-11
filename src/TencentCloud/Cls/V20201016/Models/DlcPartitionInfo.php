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
 * Data Lake Computing Service (Data Lake Compute, abbreviation DLC) partitioning configuration
 *
 * @method string getClsField() Obtain <p>Field names in cls logs</p>
 * @method void setClsField(string $ClsField) Set <p>Field names in cls logs</p>
 * @method string getDlcField() Obtain <p>Column name of the dlc table</p>
 * @method void setDlcField(string $DlcField) Set <p>Column name of the dlc table</p>
 * @method string getDlcFieldType() Obtain <p>Refer to <a href="https://www.tencentcloud.com/document/product/1342/53778?from_cn_redirect=1#Column">Type definition in DLC Column</a></p><p>Enumeration value:</p><ul><li>int|string|array: Refer to <a href="https://www.tencentcloud.com/document/product/1342/53778?from_cn_redirect=1#Column">Type definition in DLC Column</a></li></ul>
 * @method void setDlcFieldType(string $DlcFieldType) Set <p>Refer to <a href="https://www.tencentcloud.com/document/product/1342/53778?from_cn_redirect=1#Column">Type definition in DLC Column</a></p><p>Enumeration value:</p><ul><li>int|string|array: Refer to <a href="https://www.tencentcloud.com/document/product/1342/53778?from_cn_redirect=1#Column">Type definition in DLC Column</a></li></ul>
 */
class DlcPartitionInfo extends AbstractModel
{
    /**
     * @var string <p>Field names in cls logs</p>
     */
    public $ClsField;

    /**
     * @var string <p>Column name of the dlc table</p>
     */
    public $DlcField;

    /**
     * @var string <p>Refer to <a href="https://www.tencentcloud.com/document/product/1342/53778?from_cn_redirect=1#Column">Type definition in DLC Column</a></p><p>Enumeration value:</p><ul><li>int|string|array: Refer to <a href="https://www.tencentcloud.com/document/product/1342/53778?from_cn_redirect=1#Column">Type definition in DLC Column</a></li></ul>
     */
    public $DlcFieldType;

    /**
     * @param string $ClsField <p>Field names in cls logs</p>
     * @param string $DlcField <p>Column name of the dlc table</p>
     * @param string $DlcFieldType <p>Refer to <a href="https://www.tencentcloud.com/document/product/1342/53778?from_cn_redirect=1#Column">Type definition in DLC Column</a></p><p>Enumeration value:</p><ul><li>int|string|array: Refer to <a href="https://www.tencentcloud.com/document/product/1342/53778?from_cn_redirect=1#Column">Type definition in DLC Column</a></li></ul>
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
    }
}
