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
namespace TencentCloud\Lke\V20231130\Models;
use TencentCloud\Common\AbstractModel;

/**
 * GetMsgRecord request structure.
 *
 * @method integer getType() Obtain Type.
 * @method void setType(integer $Type) Set Type.
 * @method integer getCount() Obtain Quantity.
 * @method void setCount(integer $Count) Set Quantity.
 * @method string getSessionId() Obtain Session ID.
 * @method void setSessionId(string $SessionId) Set Session ID.
 * @method string getBotAppKey() Obtain Application AppKey. When Type=5 [API Visitor], this field is required. </br> How to obtain it: </br> 1. After the application is released, obtain it at [Application Page]-[Release Management]-[Call Information]-[API Management]. </br> 2. Refer to item 2 in https://cloud.tencent.com/document/product/1759/109469.
 * @method void setBotAppKey(string $BotAppKey) Set Application AppKey. When Type=5 [API Visitor], this field is required. </br> How to obtain it: </br> 1. After the application is released, obtain it at [Application Page]-[Release Management]-[Call Information]-[API Management]. </br> 2. Refer to item 2 in https://cloud.tencent.com/document/product/1759/109469.
 * @method integer getScene() Obtain Scenario, experience: 1; formal: 2.
 * @method void setScene(integer $Scene) Set Scenario, experience: 1; formal: 2.
 * @method string getLastRecordId() Obtain Last record ID. Retrieve messages in reverse order. You can only select either MidRecordId or LastRecordId.
 * @method void setLastRecordId(string $LastRecordId) Set Last record ID. Retrieve messages in reverse order. You can only select either MidRecordId or LastRecordId.
 * @method string getMidRecordId() Obtain If this value is input, it means pulling a total of count message records before and after the record ID. You can only select either MidRecordId or LastRecordId.
 * @method void setMidRecordId(string $MidRecordId) Set If this value is input, it means pulling a total of count message records before and after the record ID. You can only select either MidRecordId or LastRecordId.
 */
class GetMsgRecordRequest extends AbstractModel
{
    /**
     * @var integer Type.
     */
    public $Type;

    /**
     * @var integer Quantity.
     */
    public $Count;

    /**
     * @var string Session ID.
     */
    public $SessionId;

    /**
     * @var string Application AppKey. When Type=5 [API Visitor], this field is required. </br> How to obtain it: </br> 1. After the application is released, obtain it at [Application Page]-[Release Management]-[Call Information]-[API Management]. </br> 2. Refer to item 2 in https://cloud.tencent.com/document/product/1759/109469.
     */
    public $BotAppKey;

    /**
     * @var integer Scenario, experience: 1; formal: 2.
     */
    public $Scene;

    /**
     * @var string Last record ID. Retrieve messages in reverse order. You can only select either MidRecordId or LastRecordId.
     */
    public $LastRecordId;

    /**
     * @var string If this value is input, it means pulling a total of count message records before and after the record ID. You can only select either MidRecordId or LastRecordId.
     */
    public $MidRecordId;

    /**
     * @param integer $Type Type.
     * @param integer $Count Quantity.
     * @param string $SessionId Session ID.
     * @param string $BotAppKey Application AppKey. When Type=5 [API Visitor], this field is required. </br> How to obtain it: </br> 1. After the application is released, obtain it at [Application Page]-[Release Management]-[Call Information]-[API Management]. </br> 2. Refer to item 2 in https://cloud.tencent.com/document/product/1759/109469.
     * @param integer $Scene Scenario, experience: 1; formal: 2.
     * @param string $LastRecordId Last record ID. Retrieve messages in reverse order. You can only select either MidRecordId or LastRecordId.
     * @param string $MidRecordId If this value is input, it means pulling a total of count message records before and after the record ID. You can only select either MidRecordId or LastRecordId.
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

        if (array_key_exists("Count",$param) and $param["Count"] !== null) {
            $this->Count = $param["Count"];
        }

        if (array_key_exists("SessionId",$param) and $param["SessionId"] !== null) {
            $this->SessionId = $param["SessionId"];
        }

        if (array_key_exists("BotAppKey",$param) and $param["BotAppKey"] !== null) {
            $this->BotAppKey = $param["BotAppKey"];
        }

        if (array_key_exists("Scene",$param) and $param["Scene"] !== null) {
            $this->Scene = $param["Scene"];
        }

        if (array_key_exists("LastRecordId",$param) and $param["LastRecordId"] !== null) {
            $this->LastRecordId = $param["LastRecordId"];
        }

        if (array_key_exists("MidRecordId",$param) and $param["MidRecordId"] !== null) {
            $this->MidRecordId = $param["MidRecordId"];
        }
    }
}
