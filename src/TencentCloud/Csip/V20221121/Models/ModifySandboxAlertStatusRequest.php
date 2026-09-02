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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifySandboxAlertStatus request structure.
 *
 * @method string getAlertType() Obtain Alarm type
Enumeration values:
ACL: access control
DLP: data leakage protection
LLM_AUDIT: LLM audit
 * @method void setAlertType(string $AlertType) Set Alarm type
Enumeration values:
ACL: access control
DLP: data leakage protection
LLM_AUDIT: LLM audit
 * @method string getBelongAssetType() Obtain Asset type to which it belongs
Enumeration values:
HOST: Host
CONTAINER: Container
 * @method void setBelongAssetType(string $BelongAssetType) Set Asset type to which it belongs
Enumeration values:
HOST: Host
CONTAINER: Container
 * @method array getIDList() Obtain Alarm record ID list
Input parameter limits: non-empty, 1-100 in length, take effect after deduplication.
 * @method void setIDList(array $IDList) Set Alarm record ID list
Input parameter limits: non-empty, 1-100 in length, take effect after deduplication.
 * @method string getStatus() Obtain Target Operation
Enumeration values:
HANDLED: processed
IGNORE: ignored
PASS: allowlisted
DELETE: Delete (cannot be undone)
 * @method void setStatus(string $Status) Set Target Operation
Enumeration values:
HANDLED: processed
IGNORE: ignored
PASS: allowlisted
DELETE: Delete (cannot be undone)
 */
class ModifySandboxAlertStatusRequest extends AbstractModel
{
    /**
     * @var string Alarm type
Enumeration values:
ACL: access control
DLP: data leakage protection
LLM_AUDIT: LLM audit
     */
    public $AlertType;

    /**
     * @var string Asset type to which it belongs
Enumeration values:
HOST: Host
CONTAINER: Container
     */
    public $BelongAssetType;

    /**
     * @var array Alarm record ID list
Input parameter limits: non-empty, 1-100 in length, take effect after deduplication.
     */
    public $IDList;

    /**
     * @var string Target Operation
Enumeration values:
HANDLED: processed
IGNORE: ignored
PASS: allowlisted
DELETE: Delete (cannot be undone)
     */
    public $Status;

    /**
     * @param string $AlertType Alarm type
Enumeration values:
ACL: access control
DLP: data leakage protection
LLM_AUDIT: LLM audit
     * @param string $BelongAssetType Asset type to which it belongs
Enumeration values:
HOST: Host
CONTAINER: Container
     * @param array $IDList Alarm record ID list
Input parameter limits: non-empty, 1-100 in length, take effect after deduplication.
     * @param string $Status Target Operation
Enumeration values:
HANDLED: processed
IGNORE: ignored
PASS: allowlisted
DELETE: Delete (cannot be undone)
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
        if (array_key_exists("AlertType",$param) and $param["AlertType"] !== null) {
            $this->AlertType = $param["AlertType"];
        }

        if (array_key_exists("BelongAssetType",$param) and $param["BelongAssetType"] !== null) {
            $this->BelongAssetType = $param["BelongAssetType"];
        }

        if (array_key_exists("IDList",$param) and $param["IDList"] !== null) {
            $this->IDList = $param["IDList"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }
    }
}
