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
namespace TencentCloud\Ccc\V20200210\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateOwnNumberApply request structure.
 *
 * @method integer getSdkAppId() Obtain Application id (required) can be found at https://console.cloud.tencent.com/ccc.
 * @method void setSdkAppId(integer $SdkAppId) Set Application id (required) can be found at https://console.cloud.tencent.com/ccc.
 * @method integer getSipTrunkId() Obtain SIP connection id.
 * @method void setSipTrunkId(integer $SipTrunkId) Set SIP connection id.
 * @method array getDetailList() Obtain Circuit-Related parameters.
 * @method void setDetailList(array $DetailList) Set Circuit-Related parameters.
 * @method string getPrefix() Obtain Prefix for sending numbers.
 * @method void setPrefix(string $Prefix) Set Prefix for sending numbers.
 */
class CreateOwnNumberApplyRequest extends AbstractModel
{
    /**
     * @var integer Application id (required) can be found at https://console.cloud.tencent.com/ccc.
     */
    public $SdkAppId;

    /**
     * @var integer SIP connection id.
     */
    public $SipTrunkId;

    /**
     * @var array Circuit-Related parameters.
     */
    public $DetailList;

    /**
     * @var string Prefix for sending numbers.
     */
    public $Prefix;

    /**
     * @param integer $SdkAppId Application id (required) can be found at https://console.cloud.tencent.com/ccc.
     * @param integer $SipTrunkId SIP connection id.
     * @param array $DetailList Circuit-Related parameters.
     * @param string $Prefix Prefix for sending numbers.
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
        if (array_key_exists("SdkAppId",$param) and $param["SdkAppId"] !== null) {
            $this->SdkAppId = $param["SdkAppId"];
        }

        if (array_key_exists("SipTrunkId",$param) and $param["SipTrunkId"] !== null) {
            $this->SipTrunkId = $param["SipTrunkId"];
        }

        if (array_key_exists("DetailList",$param) and $param["DetailList"] !== null) {
            $this->DetailList = [];
            foreach ($param["DetailList"] as $key => $value){
                $obj = new OwnNumberApplyDetailItem();
                $obj->deserialize($value);
                array_push($this->DetailList, $obj);
            }
        }

        if (array_key_exists("Prefix",$param) and $param["Prefix"] !== null) {
            $this->Prefix = $param["Prefix"];
        }
    }
}
