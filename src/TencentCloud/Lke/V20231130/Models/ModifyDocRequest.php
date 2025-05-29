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
 * ModifyDoc request structure.
 *
 * @method string getBotBizId() Obtain Application ID.
 * @method void setBotBizId(string $BotBizId) Set Application ID.
 * @method string getDocBizId() Obtain Document ID.
 * @method void setDocBizId(string $DocBizId) Set Document ID.
 * @method boolean getIsRefer() Obtain Whether to reference a link.
 * @method void setIsRefer(boolean $IsRefer) Set Whether to reference a link.
 * @method integer getAttrRange() Obtain Applicable scope of labels: 1: all; 2: by condition.
 * @method void setAttrRange(integer $AttrRange) Set Applicable scope of labels: 1: all; 2: by condition.
 * @method string getLoginUin() Obtain Login to user's root account (required in integrator mode).
 * @method void setLoginUin(string $LoginUin) Set Login to user's root account (required in integrator mode).
 * @method string getLoginSubAccountUin() Obtain Login to user's sub-account (required in integrator mode).
 * @method void setLoginSubAccountUin(string $LoginSubAccountUin) Set Login to user's sub-account (required in integrator mode).
 * @method array getAttrLabels() Obtain Associated labels.
 * @method void setAttrLabels(array $AttrLabels) Set Associated labels.
 * @method string getWebUrl() Obtain Web page (or custom link) address.
 * @method void setWebUrl(string $WebUrl) Set Web page (or custom link) address.
 * @method integer getReferUrlType() Obtain External reference link type: 0: system link 1: custom link.
When the value is 1, the weburl field cannot be empty; otherwise, it will not take effect.
 * @method void setReferUrlType(integer $ReferUrlType) Set External reference link type: 0: system link 1: custom link.
When the value is 1, the weburl field cannot be empty; otherwise, it will not take effect.
 * @method string getExpireStart() Obtain Effective start time, unix timestamp.
 * @method void setExpireStart(string $ExpireStart) Set Effective start time, unix timestamp.
 * @method string getExpireEnd() Obtain Effective end time, unix timestamp. 0 indicates permanent validity.
 * @method void setExpireEnd(string $ExpireEnd) Set Effective end time, unix timestamp. 0 indicates permanent validity.
 * @method string getCateBizId() Obtain Category ID.
 * @method void setCateBizId(string $CateBizId) Set Category ID.
 */
class ModifyDocRequest extends AbstractModel
{
    /**
     * @var string Application ID.
     */
    public $BotBizId;

    /**
     * @var string Document ID.
     */
    public $DocBizId;

    /**
     * @var boolean Whether to reference a link.
     */
    public $IsRefer;

    /**
     * @var integer Applicable scope of labels: 1: all; 2: by condition.
     */
    public $AttrRange;

    /**
     * @var string Login to user's root account (required in integrator mode).
     */
    public $LoginUin;

    /**
     * @var string Login to user's sub-account (required in integrator mode).
     */
    public $LoginSubAccountUin;

    /**
     * @var array Associated labels.
     */
    public $AttrLabels;

    /**
     * @var string Web page (or custom link) address.
     */
    public $WebUrl;

    /**
     * @var integer External reference link type: 0: system link 1: custom link.
When the value is 1, the weburl field cannot be empty; otherwise, it will not take effect.
     */
    public $ReferUrlType;

    /**
     * @var string Effective start time, unix timestamp.
     */
    public $ExpireStart;

    /**
     * @var string Effective end time, unix timestamp. 0 indicates permanent validity.
     */
    public $ExpireEnd;

    /**
     * @var string Category ID.
     */
    public $CateBizId;

    /**
     * @param string $BotBizId Application ID.
     * @param string $DocBizId Document ID.
     * @param boolean $IsRefer Whether to reference a link.
     * @param integer $AttrRange Applicable scope of labels: 1: all; 2: by condition.
     * @param string $LoginUin Login to user's root account (required in integrator mode).
     * @param string $LoginSubAccountUin Login to user's sub-account (required in integrator mode).
     * @param array $AttrLabels Associated labels.
     * @param string $WebUrl Web page (or custom link) address.
     * @param integer $ReferUrlType External reference link type: 0: system link 1: custom link.
When the value is 1, the weburl field cannot be empty; otherwise, it will not take effect.
     * @param string $ExpireStart Effective start time, unix timestamp.
     * @param string $ExpireEnd Effective end time, unix timestamp. 0 indicates permanent validity.
     * @param string $CateBizId Category ID.
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
        if (array_key_exists("BotBizId",$param) and $param["BotBizId"] !== null) {
            $this->BotBizId = $param["BotBizId"];
        }

        if (array_key_exists("DocBizId",$param) and $param["DocBizId"] !== null) {
            $this->DocBizId = $param["DocBizId"];
        }

        if (array_key_exists("IsRefer",$param) and $param["IsRefer"] !== null) {
            $this->IsRefer = $param["IsRefer"];
        }

        if (array_key_exists("AttrRange",$param) and $param["AttrRange"] !== null) {
            $this->AttrRange = $param["AttrRange"];
        }

        if (array_key_exists("LoginUin",$param) and $param["LoginUin"] !== null) {
            $this->LoginUin = $param["LoginUin"];
        }

        if (array_key_exists("LoginSubAccountUin",$param) and $param["LoginSubAccountUin"] !== null) {
            $this->LoginSubAccountUin = $param["LoginSubAccountUin"];
        }

        if (array_key_exists("AttrLabels",$param) and $param["AttrLabels"] !== null) {
            $this->AttrLabels = [];
            foreach ($param["AttrLabels"] as $key => $value){
                $obj = new AttrLabelRefer();
                $obj->deserialize($value);
                array_push($this->AttrLabels, $obj);
            }
        }

        if (array_key_exists("WebUrl",$param) and $param["WebUrl"] !== null) {
            $this->WebUrl = $param["WebUrl"];
        }

        if (array_key_exists("ReferUrlType",$param) and $param["ReferUrlType"] !== null) {
            $this->ReferUrlType = $param["ReferUrlType"];
        }

        if (array_key_exists("ExpireStart",$param) and $param["ExpireStart"] !== null) {
            $this->ExpireStart = $param["ExpireStart"];
        }

        if (array_key_exists("ExpireEnd",$param) and $param["ExpireEnd"] !== null) {
            $this->ExpireEnd = $param["ExpireEnd"];
        }

        if (array_key_exists("CateBizId",$param) and $param["CateBizId"] !== null) {
            $this->CateBizId = $param["CateBizId"];
        }
    }
}
