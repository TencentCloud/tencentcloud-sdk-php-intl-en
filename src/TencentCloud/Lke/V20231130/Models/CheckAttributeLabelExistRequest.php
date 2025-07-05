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
 * CheckAttributeLabelExist request structure.
 *
 * @method string getBotBizId() Obtain Application ID.
 * @method void setBotBizId(string $BotBizId) Set Application ID.
 * @method string getLabelName() Obtain Attribute name.
 * @method void setLabelName(string $LabelName) Set Attribute name.
 * @method string getAttributeBizId() Obtain Attribute ID.
 * @method void setAttributeBizId(string $AttributeBizId) Set Attribute ID.
 * @method string getLoginUin() Obtain Log in to the user's root account (required in integrator mode).
 * @method void setLoginUin(string $LoginUin) Set Log in to the user's root account (required in integrator mode).
 * @method string getLoginSubAccountUin() Obtain Log in to the user's sub-account (required in integrator mode).
 * @method void setLoginSubAccountUin(string $LoginSubAccountUin) Set Log in to the user's sub-account (required in integrator mode).
 * @method string getLastLabelBizId() Obtain Scroll loading, the last attribute label ID.
 * @method void setLastLabelBizId(string $LastLabelBizId) Set Scroll loading, the last attribute label ID.
 */
class CheckAttributeLabelExistRequest extends AbstractModel
{
    /**
     * @var string Application ID.
     */
    public $BotBizId;

    /**
     * @var string Attribute name.
     */
    public $LabelName;

    /**
     * @var string Attribute ID.
     */
    public $AttributeBizId;

    /**
     * @var string Log in to the user's root account (required in integrator mode).
     */
    public $LoginUin;

    /**
     * @var string Log in to the user's sub-account (required in integrator mode).
     */
    public $LoginSubAccountUin;

    /**
     * @var string Scroll loading, the last attribute label ID.
     */
    public $LastLabelBizId;

    /**
     * @param string $BotBizId Application ID.
     * @param string $LabelName Attribute name.
     * @param string $AttributeBizId Attribute ID.
     * @param string $LoginUin Log in to the user's root account (required in integrator mode).
     * @param string $LoginSubAccountUin Log in to the user's sub-account (required in integrator mode).
     * @param string $LastLabelBizId Scroll loading, the last attribute label ID.
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

        if (array_key_exists("LabelName",$param) and $param["LabelName"] !== null) {
            $this->LabelName = $param["LabelName"];
        }

        if (array_key_exists("AttributeBizId",$param) and $param["AttributeBizId"] !== null) {
            $this->AttributeBizId = $param["AttributeBizId"];
        }

        if (array_key_exists("LoginUin",$param) and $param["LoginUin"] !== null) {
            $this->LoginUin = $param["LoginUin"];
        }

        if (array_key_exists("LoginSubAccountUin",$param) and $param["LoginSubAccountUin"] !== null) {
            $this->LoginSubAccountUin = $param["LoginSubAccountUin"];
        }

        if (array_key_exists("LastLabelBizId",$param) and $param["LastLabelBizId"] !== null) {
            $this->LastLabelBizId = $param["LastLabelBizId"];
        }
    }
}
