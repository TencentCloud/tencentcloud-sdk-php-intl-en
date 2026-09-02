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
 * Complete notification policy information
 *
 * @method integer getID() Obtain <p>Policy ID</p>
 * @method void setID(integer $ID) Set <p>Policy ID</p>
 * @method string getName() Obtain <p>Policy name.</p>
 * @method void setName(string $Name) Set <p>Policy name.</p>
 * @method string getStatus() Obtain <p>Enabled status<br>Enumeration values:<br>ON: enable<br>OFF: disable</p>
 * @method void setStatus(string $Status) Set <p>Enabled status<br>Enumeration values:<br>ON: enable<br>OFF: disable</p>
 * @method array getNotifyItems() Obtain <p>Notification item list (module + submodule + severity + handling status)</p>
 * @method void setNotifyItems(array $NotifyItems) Set <p>Notification item list (module + submodule + severity + handling status)</p>
 * @method array getMemberId() Obtain <p>Account range of members to receive</p>
 * @method void setMemberId(array $MemberId) Set <p>Account range of members to receive</p>
 * @method WebhookAssetScope getAssetScope() Obtain <p>Notification asset scope</p>
 * @method void setAssetScope(WebhookAssetScope $AssetScope) Set <p>Notification asset scope</p>
 * @method string getReceiveFormat() Obtain <p>Accept format<br>Enumeration values:<br>TEXT: text format<br>JSON: JSON format</p>
 * @method void setReceiveFormat(string $ReceiveFormat) Set <p>Accept format<br>Enumeration values:<br>TEXT: text format<br>JSON: JSON format</p>
 * @method string getMsgLanguage() Obtain <p>Push language<br>Enumeration values:<br>zh: Chinese<br>en: English</p>
 * @method void setMsgLanguage(string $MsgLanguage) Set <p>Push language<br>Enumeration values:<br>zh: Chinese<br>en: English</p>
 * @method array getCustomFields() Obtain <p>Custom passthrough field list. It is an empty array when turned off.</p>
 * @method void setCustomFields(array $CustomFields) Set <p>Custom passthrough field list. It is an empty array when turned off.</p>
 * @method array getReceiverIDList() Obtain <p>Receiving robot ID list</p>
 * @method void setReceiverIDList(array $ReceiverIDList) Set <p>Receiving robot ID list</p>
 * @method array getReceiverList() Obtain <p>Simplify info for the receiving robot (for list row display)</p>
 * @method void setReceiverList(array $ReceiverList) Set <p>Simplify info for the receiving robot (for list row display)</p>
 */
class WebhookPolicy extends AbstractModel
{
    /**
     * @var integer <p>Policy ID</p>
     */
    public $ID;

    /**
     * @var string <p>Policy name.</p>
     */
    public $Name;

    /**
     * @var string <p>Enabled status<br>Enumeration values:<br>ON: enable<br>OFF: disable</p>
     */
    public $Status;

    /**
     * @var array <p>Notification item list (module + submodule + severity + handling status)</p>
     */
    public $NotifyItems;

    /**
     * @var array <p>Account range of members to receive</p>
     */
    public $MemberId;

    /**
     * @var WebhookAssetScope <p>Notification asset scope</p>
     */
    public $AssetScope;

    /**
     * @var string <p>Accept format<br>Enumeration values:<br>TEXT: text format<br>JSON: JSON format</p>
     */
    public $ReceiveFormat;

    /**
     * @var string <p>Push language<br>Enumeration values:<br>zh: Chinese<br>en: English</p>
     */
    public $MsgLanguage;

    /**
     * @var array <p>Custom passthrough field list. It is an empty array when turned off.</p>
     */
    public $CustomFields;

    /**
     * @var array <p>Receiving robot ID list</p>
     */
    public $ReceiverIDList;

    /**
     * @var array <p>Simplify info for the receiving robot (for list row display)</p>
     */
    public $ReceiverList;

    /**
     * @param integer $ID <p>Policy ID</p>
     * @param string $Name <p>Policy name.</p>
     * @param string $Status <p>Enabled status<br>Enumeration values:<br>ON: enable<br>OFF: disable</p>
     * @param array $NotifyItems <p>Notification item list (module + submodule + severity + handling status)</p>
     * @param array $MemberId <p>Account range of members to receive</p>
     * @param WebhookAssetScope $AssetScope <p>Notification asset scope</p>
     * @param string $ReceiveFormat <p>Accept format<br>Enumeration values:<br>TEXT: text format<br>JSON: JSON format</p>
     * @param string $MsgLanguage <p>Push language<br>Enumeration values:<br>zh: Chinese<br>en: English</p>
     * @param array $CustomFields <p>Custom passthrough field list. It is an empty array when turned off.</p>
     * @param array $ReceiverIDList <p>Receiving robot ID list</p>
     * @param array $ReceiverList <p>Simplify info for the receiving robot (for list row display)</p>
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
        if (array_key_exists("ID",$param) and $param["ID"] !== null) {
            $this->ID = $param["ID"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("NotifyItems",$param) and $param["NotifyItems"] !== null) {
            $this->NotifyItems = [];
            foreach ($param["NotifyItems"] as $key => $value){
                $obj = new WebhookNotifyItem();
                $obj->deserialize($value);
                array_push($this->NotifyItems, $obj);
            }
        }

        if (array_key_exists("MemberId",$param) and $param["MemberId"] !== null) {
            $this->MemberId = $param["MemberId"];
        }

        if (array_key_exists("AssetScope",$param) and $param["AssetScope"] !== null) {
            $this->AssetScope = new WebhookAssetScope();
            $this->AssetScope->deserialize($param["AssetScope"]);
        }

        if (array_key_exists("ReceiveFormat",$param) and $param["ReceiveFormat"] !== null) {
            $this->ReceiveFormat = $param["ReceiveFormat"];
        }

        if (array_key_exists("MsgLanguage",$param) and $param["MsgLanguage"] !== null) {
            $this->MsgLanguage = $param["MsgLanguage"];
        }

        if (array_key_exists("CustomFields",$param) and $param["CustomFields"] !== null) {
            $this->CustomFields = [];
            foreach ($param["CustomFields"] as $key => $value){
                $obj = new WebhookCustomField();
                $obj->deserialize($value);
                array_push($this->CustomFields, $obj);
            }
        }

        if (array_key_exists("ReceiverIDList",$param) and $param["ReceiverIDList"] !== null) {
            $this->ReceiverIDList = $param["ReceiverIDList"];
        }

        if (array_key_exists("ReceiverList",$param) and $param["ReceiverList"] !== null) {
            $this->ReceiverList = [];
            foreach ($param["ReceiverList"] as $key => $value){
                $obj = new WebhookReceiverBrief();
                $obj->deserialize($value);
                array_push($this->ReceiverList, $obj);
            }
        }
    }
}
