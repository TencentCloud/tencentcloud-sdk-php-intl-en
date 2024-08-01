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
namespace TencentCloud\Dlc\V20210125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Information about the users accessing through the third-party
 *
 * @method integer getId() Obtain ID information
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setId(integer $Id) Set ID information
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getUin() Obtain User primary UIN
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setUin(string $Uin) Set User primary UIN
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getAppId() Obtain User AppID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setAppId(string $AppId) Set User AppID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getCreateTime() Obtain Activation time
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCreateTime(string $CreateTime) Set Activation time
Note: This field may return null, indicating that no valid values can be obtained.
 */
class OpendThirdAccessUserInfo extends AbstractModel
{
    /**
     * @var integer ID information
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Id;

    /**
     * @var string User primary UIN
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Uin;

    /**
     * @var string User AppID
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $AppId;

    /**
     * @var string Activation time
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $CreateTime;

    /**
     * @param integer $Id ID information
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Uin User primary UIN
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $AppId User AppID
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $CreateTime Activation time
Note: This field may return null, indicating that no valid values can be obtained.
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("Uin",$param) and $param["Uin"] !== null) {
            $this->Uin = $param["Uin"];
        }

        if (array_key_exists("AppId",$param) and $param["AppId"] !== null) {
            $this->AppId = $param["AppId"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }
    }
}
