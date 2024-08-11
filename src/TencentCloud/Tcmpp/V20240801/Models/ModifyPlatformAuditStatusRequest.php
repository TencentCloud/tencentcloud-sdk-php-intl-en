<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
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
namespace TencentCloud\Tcmpp\V20240801\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyPlatformAuditStatus request structure.
 *
 * @method string getAuditNo() Obtain Approval ticket ID
 * @method void setAuditNo(string $AuditNo) Set Approval ticket ID
 * @method integer getAuditResult() Obtain Approval result
 * @method void setAuditResult(integer $AuditResult) Set Approval result
 * @method string getPlatformId() Obtain Platform ID
 * @method void setPlatformId(string $PlatformId) Set Platform ID
 * @method string getAuditNote() Obtain Approval description
 * @method void setAuditNote(string $AuditNote) Set Approval description
 * @method array getAuditItems() Obtain Approval details
 * @method void setAuditItems(array $AuditItems) Set Approval details
 */
class ModifyPlatformAuditStatusRequest extends AbstractModel
{
    /**
     * @var string Approval ticket ID
     */
    public $AuditNo;

    /**
     * @var integer Approval result
     */
    public $AuditResult;

    /**
     * @var string Platform ID
     */
    public $PlatformId;

    /**
     * @var string Approval description
     */
    public $AuditNote;

    /**
     * @var array Approval details
     */
    public $AuditItems;

    /**
     * @param string $AuditNo Approval ticket ID
     * @param integer $AuditResult Approval result
     * @param string $PlatformId Platform ID
     * @param string $AuditNote Approval description
     * @param array $AuditItems Approval details
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
        if (array_key_exists("AuditNo",$param) and $param["AuditNo"] !== null) {
            $this->AuditNo = $param["AuditNo"];
        }

        if (array_key_exists("AuditResult",$param) and $param["AuditResult"] !== null) {
            $this->AuditResult = $param["AuditResult"];
        }

        if (array_key_exists("PlatformId",$param) and $param["PlatformId"] !== null) {
            $this->PlatformId = $param["PlatformId"];
        }

        if (array_key_exists("AuditNote",$param) and $param["AuditNote"] !== null) {
            $this->AuditNote = $param["AuditNote"];
        }

        if (array_key_exists("AuditItems",$param) and $param["AuditItems"] !== null) {
            $this->AuditItems = [];
            foreach ($param["AuditItems"] as $key => $value){
                $obj = new AuditInfoReq();
                $obj->deserialize($value);
                array_push($this->AuditItems, $obj);
            }
        }
    }
}
