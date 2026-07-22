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
 * @method integer getSubAppId() Obtain <p><b>Video-on-demand (VOD) <a href="/document/product/266/14574">application</a> ID. For customers who activate on-demand services from December 25, 2023, to access resources in on-demand applications (whether it is the default application or a newly created application), you must fill in this field with the application ID.</b></p>
 * @method void setSubAppId(integer $SubAppId) Set <p><b>Video-on-demand (VOD) <a href="/document/product/266/14574">application</a> ID. For customers who activate on-demand services from December 25, 2023, to access resources in on-demand applications (whether it is the default application or a newly created application), you must fill in this field with the application ID.</b></p>
 * @method string getApiToken() Obtain <p>To refresh the Api Key</p>
 * @method void setApiToken(string $ApiToken) Set <p>To refresh the Api Key</p>
 * @method string getActionType() Obtain <p>Merge (default, merges ExtInfo JSON by top-level key), Overwrite (directly overwrite)</p>
 * @method void setActionType(string $ActionType) Set <p>Merge (default, merges ExtInfo JSON by top-level key), Overwrite (directly overwrite)</p>
 * @method string getExtInfo() Obtain <p>Extended information of the token</p>
 * @method void setExtInfo(string $ExtInfo) Set <p>Extended information of the token</p>
 */
class UpdateAigcApiTokenRequest extends AbstractModel
{
    /**
     * @var integer <p><b>Video-on-demand (VOD) <a href="/document/product/266/14574">application</a> ID. For customers who activate on-demand services from December 25, 2023, to access resources in on-demand applications (whether it is the default application or a newly created application), you must fill in this field with the application ID.</b></p>
     */
    public $SubAppId;

    /**
     * @var string <p>To refresh the Api Key</p>
     */
    public $ApiToken;

    /**
     * @var string <p>Merge (default, merges ExtInfo JSON by top-level key), Overwrite (directly overwrite)</p>
     */
    public $ActionType;

    /**
     * @var string <p>Extended information of the token</p>
     */
    public $ExtInfo;

    /**
     * @param integer $SubAppId <p><b>Video-on-demand (VOD) <a href="/document/product/266/14574">application</a> ID. For customers who activate on-demand services from December 25, 2023, to access resources in on-demand applications (whether it is the default application or a newly created application), you must fill in this field with the application ID.</b></p>
     * @param string $ApiToken <p>To refresh the Api Key</p>
     * @param string $ActionType <p>Merge (default, merges ExtInfo JSON by top-level key), Overwrite (directly overwrite)</p>
     * @param string $ExtInfo <p>Extended information of the token</p>
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
