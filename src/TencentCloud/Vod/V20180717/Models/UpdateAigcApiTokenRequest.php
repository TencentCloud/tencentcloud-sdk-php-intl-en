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
namespace TencentCloud\Vod\V20180717\Models;
use TencentCloud\Common\AbstractModel;

/**
 * UpdateAigcApiToken request structure.
 *
 * @method integer getSubAppId() Obtain 
 * @method void setSubAppId(integer $SubAppId) Set 
 * @method string getApiToken() Obtain 
 * @method void setApiToken(string $ApiToken) Set 
 * @method string getActionType() Obtain 
 * @method void setActionType(string $ActionType) Set 
 * @method string getExtInfo() Obtain 
 * @method void setExtInfo(string $ExtInfo) Set 
 */
class UpdateAigcApiTokenRequest extends AbstractModel
{
    /**
     * @var integer 
     */
    public $SubAppId;

    /**
     * @var string 
     */
    public $ApiToken;

    /**
     * @var string 
     */
    public $ActionType;

    /**
     * @var string 
     */
    public $ExtInfo;

    /**
     * @param integer $SubAppId 
     * @param string $ApiToken 
     * @param string $ActionType 
     * @param string $ExtInfo 
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
        if (array_key_exists("SubAppId",$param) and $param["SubAppId"] !== null) {
            $this->SubAppId = $param["SubAppId"];
        }

        if (array_key_exists("ApiToken",$param) and $param["ApiToken"] !== null) {
            $this->ApiToken = $param["ApiToken"];
        }

        if (array_key_exists("ActionType",$param) and $param["ActionType"] !== null) {
            $this->ActionType = $param["ActionType"];
        }

        if (array_key_exists("ExtInfo",$param) and $param["ExtInfo"] !== null) {
            $this->ExtInfo = $param["ExtInfo"];
        }
    }
}
