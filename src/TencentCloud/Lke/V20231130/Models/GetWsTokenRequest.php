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
 * GetWsToken request structure.
 *
 * @method integer getType() Obtain Access type, 5 - API visitor .
 * @method void setType(integer $Type) Set Access type, 5 - API visitor .
 * @method string getBotAppKey() Obtain Application AppKey</br>
How to Obtain It:</br>
1. After the application is released, obtain it at [Release Management] - [Call Information] - [API Management] on the application page.</br>
2. See the second item in https://cloud.tencent.com/document/product/1759/109469.
 * @method void setBotAppKey(string $BotAppKey) Set Application AppKey</br>
How to Obtain It:</br>
1. After the application is released, obtain it at [Release Management] - [Call Information] - [API Management] on the application page.</br>
2. See the second item in https://cloud.tencent.com/document/product/1759/109469.
 * @method string getVisitorBizId() Obtain Visitor ID (external input, recommended to be unique, identifies the user currently accessing the session). Length Limit: string(64).
 * @method void setVisitorBizId(string $VisitorBizId) Set Visitor ID (external input, recommended to be unique, identifies the user currently accessing the session). Length Limit: string(64).
 * @method array getVisitorLabels() Obtain Knowledge label, used for search filter in the knowledge base. This field is about to be deactivated. Please use the custom_variables field in the dialogue endpoint API to replace this field.
 * @method void setVisitorLabels(array $VisitorLabels) Set Knowledge label, used for search filter in the knowledge base. This field is about to be deactivated. Please use the custom_variables field in the dialogue endpoint API to replace this field.
 */
class GetWsTokenRequest extends AbstractModel
{
    /**
     * @var integer Access type, 5 - API visitor .
     */
    public $Type;

    /**
     * @var string Application AppKey</br>
How to Obtain It:</br>
1. After the application is released, obtain it at [Release Management] - [Call Information] - [API Management] on the application page.</br>
2. See the second item in https://cloud.tencent.com/document/product/1759/109469.
     */
    public $BotAppKey;

    /**
     * @var string Visitor ID (external input, recommended to be unique, identifies the user currently accessing the session). Length Limit: string(64).
     */
    public $VisitorBizId;

    /**
     * @var array Knowledge label, used for search filter in the knowledge base. This field is about to be deactivated. Please use the custom_variables field in the dialogue endpoint API to replace this field.
     */
    public $VisitorLabels;

    /**
     * @param integer $Type Access type, 5 - API visitor .
     * @param string $BotAppKey Application AppKey</br>
How to Obtain It:</br>
1. After the application is released, obtain it at [Release Management] - [Call Information] - [API Management] on the application page.</br>
2. See the second item in https://cloud.tencent.com/document/product/1759/109469.
     * @param string $VisitorBizId Visitor ID (external input, recommended to be unique, identifies the user currently accessing the session). Length Limit: string(64).
     * @param array $VisitorLabels Knowledge label, used for search filter in the knowledge base. This field is about to be deactivated. Please use the custom_variables field in the dialogue endpoint API to replace this field.
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

        if (array_key_exists("BotAppKey",$param) and $param["BotAppKey"] !== null) {
            $this->BotAppKey = $param["BotAppKey"];
        }

        if (array_key_exists("VisitorBizId",$param) and $param["VisitorBizId"] !== null) {
            $this->VisitorBizId = $param["VisitorBizId"];
        }

        if (array_key_exists("VisitorLabels",$param) and $param["VisitorLabels"] !== null) {
            $this->VisitorLabels = [];
            foreach ($param["VisitorLabels"] as $key => $value){
                $obj = new GetWsTokenReq_Label();
                $obj->deserialize($value);
                array_push($this->VisitorLabels, $obj);
            }
        }
    }
}
