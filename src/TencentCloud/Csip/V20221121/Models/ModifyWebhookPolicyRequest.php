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
 * ModifyWebhookPolicy request structure.
 *
 * @method string getName() Obtain <p>Policy Name<br>Input parameter limit: 1-20 characters, tenant-unique</p>
 * @method void setName(string $Name) Set <p>Policy Name<br>Input parameter limit: 1-20 characters, tenant-unique</p>
 * @method string getStatus() Obtain <p>Enable status<br>Enumeration values:<br>ON: Enabled<br>OFF: Disabled</p>
 * @method void setStatus(string $Status) Set <p>Enable status<br>Enumeration values:<br>ON: Enabled<br>OFF: Disabled</p>
 * @method array getNotifyItems() Obtain <p>List of notification items<br>Input parameter limit: at least 1 item. Module/SubModule must be a valid composite returned by DescribeWebhookNotifyItemTree</p>
 * @method void setNotifyItems(array $NotifyItems) Set <p>List of notification items<br>Input parameter limit: at least 1 item. Module/SubModule must be a valid composite returned by DescribeWebhookNotifyItemTree</p>
 * @method WebhookAssetScope getAssetScope() Obtain <p>Asset scope for notification</p>
 * @method void setAssetScope(WebhookAssetScope $AssetScope) Set <p>Asset scope for notification</p>
 * @method string getReceiveFormat() Obtain <p>Accept format<br>Enumeration values:<br>TEXT: Text format<br>JSON: JSON format</p>
 * @method void setReceiveFormat(string $ReceiveFormat) Set <p>Accept format<br>Enumeration values:<br>TEXT: Text format<br>JSON: JSON format</p>
 * @method array getReceiverIDList() Obtain <p>Receiving robot ID list<br>Input limits: at least 1, up to 50</p>
 * @method void setReceiverIDList(array $ReceiverIDList) Set <p>Receiving robot ID list<br>Input limits: at least 1, up to 50</p>
 * @method array getMemberId() Obtain <p>Group account member id</p>
 * @method void setMemberId(array $MemberId) Set <p>Group account member id</p>
 * @method integer getID() Obtain <p>Policy ID. More than 0 means modification; equal to 0 or not passed means adding new<br>Default value: 0</p>
 * @method void setID(integer $ID) Set <p>Policy ID. More than 0 means modification; equal to 0 or not passed means adding new<br>Default value: 0</p>
 * @method string getMsgLanguage() Obtain <p>Push language<br>Enumeration values:<br>zh: Chinese<br>en: English<br>Default value: zh on the Chinese site and en on the international site</p>
 * @method void setMsgLanguage(string $MsgLanguage) Set <p>Push language<br>Enumeration values:<br>zh: Chinese<br>en: English<br>Default value: zh on the Chinese site and en on the international site</p>
 * @method array getCustomFields() Obtain <p>List of custom passthrough fields<br>Input limitation: Required when EnableCustomFields=true, up to 20</p>
 * @method void setCustomFields(array $CustomFields) Set <p>List of custom passthrough fields<br>Input limitation: Required when EnableCustomFields=true, up to 20</p>
 */
class ModifyWebhookPolicyRequest extends AbstractModel
{
    /**
     * @var string <p>Policy Name<br>Input parameter limit: 1-20 characters, tenant-unique</p>
     */
    public $Name;

    /**
     * @var string <p>Enable status<br>Enumeration values:<br>ON: Enabled<br>OFF: Disabled</p>
     */
    public $Status;

    /**
     * @var array <p>List of notification items<br>Input parameter limit: at least 1 item. Module/SubModule must be a valid composite returned by DescribeWebhookNotifyItemTree</p>
     */
    public $NotifyItems;

    /**
     * @var WebhookAssetScope <p>Asset scope for notification</p>
     */
    public $AssetScope;

    /**
     * @var string <p>Accept format<br>Enumeration values:<br>TEXT: Text format<br>JSON: JSON format</p>
     */
    public $ReceiveFormat;

    /**
     * @var array <p>Receiving robot ID list<br>Input limits: at least 1, up to 50</p>
     */
    public $ReceiverIDList;

    /**
     * @var array <p>Group account member id</p>
     */
    public $MemberId;

    /**
     * @var integer <p>Policy ID. More than 0 means modification; equal to 0 or not passed means adding new<br>Default value: 0</p>
     */
    public $ID;

    /**
     * @var string <p>Push language<br>Enumeration values:<br>zh: Chinese<br>en: English<br>Default value: zh on the Chinese site and en on the international site</p>
     */
    public $MsgLanguage;

    /**
     * @var array <p>List of custom passthrough fields<br>Input limitation: Required when EnableCustomFields=true, up to 20</p>
     */
    public $CustomFields;

    /**
     * @param string $Name <p>Policy Name<br>Input parameter limit: 1-20 characters, tenant-unique</p>
     * @param string $Status <p>Enable status<br>Enumeration values:<br>ON: Enabled<br>OFF: Disabled</p>
     * @param array $NotifyItems <p>List of notification items<br>Input parameter limit: at least 1 item. Module/SubModule must be a valid composite returned by DescribeWebhookNotifyItemTree</p>
     * @param WebhookAssetScope $AssetScope <p>Asset scope for notification</p>
     * @param string $ReceiveFormat <p>Accept format<br>Enumeration values:<br>TEXT: Text format<br>JSON: JSON format</p>
     * @param array $ReceiverIDList <p>Receiving robot ID list<br>Input limits: at least 1, up to 50</p>
     * @param array $MemberId <p>Group account member id</p>
     * @param integer $ID <p>Policy ID. More than 0 means modification; equal to 0 or not passed means adding new<br>Default value: 0</p>
     * @param string $MsgLanguage <p>Push language<br>Enumeration values:<br>zh: Chinese<br>en: English<br>Default value: zh on the Chinese site and en on the international site</p>
     * @param array $CustomFields <p>List of custom passthrough fields<br>Input limitation: Required when EnableCustomFields=true, up to 20</p>
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

        if (array_key_exists("AssetScope",$param) and $param["AssetScope"] !== null) {
            $this->AssetScope = new WebhookAssetScope();
            $this->AssetScope->deserialize($param["AssetScope"]);
        }

        if (array_key_exists("ReceiveFormat",$param) and $param["ReceiveFormat"] !== null) {
            $this->ReceiveFormat = $param["ReceiveFormat"];
        }

        if (array_key_exists("ReceiverIDList",$param) and $param["ReceiverIDList"] !== null) {
            $this->ReceiverIDList = $param["ReceiverIDList"];
        }

        if (array_key_exists("MemberId",$param) and $param["MemberId"] !== null) {
            $this->MemberId = $param["MemberId"];
        }

        if (array_key_exists("ID",$param) and $param["ID"] !== null) {
            $this->ID = $param["ID"];
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
    }
}
