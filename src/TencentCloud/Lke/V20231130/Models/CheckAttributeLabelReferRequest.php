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
 * CheckAttributeLabelRefer request structure.
 *
 * @method string getBotBizId() Obtain Application ID.
 * @method void setBotBizId(string $BotBizId) Set Application ID.
 * @method string getLoginUin() Obtain Log in to user's root account (required in integrator mode).
 * @method void setLoginUin(string $LoginUin) Set Log in to user's root account (required in integrator mode).
 * @method string getLoginSubAccountUin() Obtain Log in to user's sub-account (required in integrator mode).
 * @method void setLoginSubAccountUin(string $LoginSubAccountUin) Set Log in to user's sub-account (required in integrator mode).
 * @method string getLabelBizId() Obtain Attribute label.
 * @method void setLabelBizId(string $LabelBizId) Set Attribute label.
 * @method array getAttributeBizId() Obtain Attribute ID.
 * @method void setAttributeBizId(array $AttributeBizId) Set Attribute ID.
 */
class CheckAttributeLabelReferRequest extends AbstractModel
{
    /**
     * @var string Application ID.
     */
    public $BotBizId;

    /**
     * @var string Log in to user's root account (required in integrator mode).
     */
    public $LoginUin;

    /**
     * @var string Log in to user's sub-account (required in integrator mode).
     */
    public $LoginSubAccountUin;

    /**
     * @var string Attribute label.
     */
    public $LabelBizId;

    /**
     * @var array Attribute ID.
     */
    public $AttributeBizId;

    /**
     * @param string $BotBizId Application ID.
     * @param string $LoginUin Log in to user's root account (required in integrator mode).
     * @param string $LoginSubAccountUin Log in to user's sub-account (required in integrator mode).
     * @param string $LabelBizId Attribute label.
     * @param array $AttributeBizId Attribute ID.
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

        if (array_key_exists("LoginUin",$param) and $param["LoginUin"] !== null) {
            $this->LoginUin = $param["LoginUin"];
        }

        if (array_key_exists("LoginSubAccountUin",$param) and $param["LoginSubAccountUin"] !== null) {
            $this->LoginSubAccountUin = $param["LoginSubAccountUin"];
        }

        if (array_key_exists("LabelBizId",$param) and $param["LabelBizId"] !== null) {
            $this->LabelBizId = $param["LabelBizId"];
        }

        if (array_key_exists("AttributeBizId",$param) and $param["AttributeBizId"] !== null) {
            $this->AttributeBizId = $param["AttributeBizId"];
        }
    }
}
