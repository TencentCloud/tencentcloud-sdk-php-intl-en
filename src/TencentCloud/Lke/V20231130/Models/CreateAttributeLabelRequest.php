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
namespace TencentCloud\Lke\V20231130\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateAttributeLabel request structure.
 *
 * @method string getBotBizId() Obtain Application ID.
 * @method void setBotBizId(string $BotBizId) Set Application ID.
 * @method string getAttrName() Obtain Label name.
 * @method void setAttrName(string $AttrName) Set Label name.
 * @method array getLabels() Obtain Label value.
 * @method void setLabels(array $Labels) Set Label value.
 * @method string getAttrKey() Obtain Label identification (not effective, no need to fill in) . Abolished.
 * @method void setAttrKey(string $AttrKey) Set Label identification (not effective, no need to fill in) . Abolished.
 * @method string getLoginUin() Obtain Log in to user's root account (required in integrator mode).
 * @method void setLoginUin(string $LoginUin) Set Log in to user's root account (required in integrator mode).
 * @method string getLoginSubAccountUin() Obtain Log in to user's sub-account (required in integrator mode).
 * @method void setLoginSubAccountUin(string $LoginSubAccountUin) Set Log in to user's sub-account (required in integrator mode).
 */
class CreateAttributeLabelRequest extends AbstractModel
{
    /**
     * @var string Application ID.
     */
    public $BotBizId;

    /**
     * @var string Label name.
     */
    public $AttrName;

    /**
     * @var array Label value.
     */
    public $Labels;

    /**
     * @var string Label identification (not effective, no need to fill in) . Abolished.
     */
    public $AttrKey;

    /**
     * @var string Log in to user's root account (required in integrator mode).
     */
    public $LoginUin;

    /**
     * @var string Log in to user's sub-account (required in integrator mode).
     */
    public $LoginSubAccountUin;

    /**
     * @param string $BotBizId Application ID.
     * @param string $AttrName Label name.
     * @param array $Labels Label value.
     * @param string $AttrKey Label identification (not effective, no need to fill in) . Abolished.
     * @param string $LoginUin Log in to user's root account (required in integrator mode).
     * @param string $LoginSubAccountUin Log in to user's sub-account (required in integrator mode).
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

        if (array_key_exists("AttrName",$param) and $param["AttrName"] !== null) {
            $this->AttrName = $param["AttrName"];
        }

        if (array_key_exists("Labels",$param) and $param["Labels"] !== null) {
            $this->Labels = [];
            foreach ($param["Labels"] as $key => $value){
                $obj = new AttributeLabel();
                $obj->deserialize($value);
                array_push($this->Labels, $obj);
            }
        }

        if (array_key_exists("AttrKey",$param) and $param["AttrKey"] !== null) {
            $this->AttrKey = $param["AttrKey"];
        }

        if (array_key_exists("LoginUin",$param) and $param["LoginUin"] !== null) {
            $this->LoginUin = $param["LoginUin"];
        }

        if (array_key_exists("LoginSubAccountUin",$param) and $param["LoginSubAccountUin"] !== null) {
            $this->LoginSubAccountUin = $param["LoginSubAccountUin"];
        }
    }
}
