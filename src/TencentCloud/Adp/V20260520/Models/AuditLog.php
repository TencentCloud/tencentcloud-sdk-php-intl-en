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
namespace TencentCloud\Adp\V20260520\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Operation log
 *
 * @method AccountInfo getAccountInfo() Obtain <p>Employee information</p>
 * @method void setAccountInfo(AccountInfo $AccountInfo) Set <p>Employee information</p>
 * @method string getAppId() Obtain <p>Application business id</p>
 * @method void setAppId(string $AppId) Set <p>Application business id</p>
 * @method string getAppName() Obtain <p>Application name</p><p>Name when the operation log is triggered</p>
 * @method void setAppName(string $AppName) Set <p>Application name</p><p>Name when the operation log is triggered</p>
 * @method string getOperateTime() Obtain <p>Operation time</p><p>Parameter format: timestamp in seconds</p>
 * @method void setOperateTime(string $OperateTime) Set <p>Operation time</p><p>Parameter format: timestamp in seconds</p>
 * @method string getAction() Obtain <p>Operation type.</p>
 * @method void setAction(string $Action) Set <p>Operation type.</p>
 * @method string getBiz() Obtain <p>Operation object.</p>
 * @method void setBiz(string $Biz) Set <p>Operation object.</p>
 * @method string getContent() Obtain <p>Operation content</p>
 * @method void setContent(string $Content) Set <p>Operation content</p>
 * @method string getUniqueId() Obtain <p>Unique ID for the operation.</p>
 * @method void setUniqueId(string $UniqueId) Set <p>Unique ID for the operation.</p>
 */
class AuditLog extends AbstractModel
{
    /**
     * @var AccountInfo <p>Employee information</p>
     */
    public $AccountInfo;

    /**
     * @var string <p>Application business id</p>
     */
    public $AppId;

    /**
     * @var string <p>Application name</p><p>Name when the operation log is triggered</p>
     */
    public $AppName;

    /**
     * @var string <p>Operation time</p><p>Parameter format: timestamp in seconds</p>
     */
    public $OperateTime;

    /**
     * @var string <p>Operation type.</p>
     */
    public $Action;

    /**
     * @var string <p>Operation object.</p>
     */
    public $Biz;

    /**
     * @var string <p>Operation content</p>
     */
    public $Content;

    /**
     * @var string <p>Unique ID for the operation.</p>
     */
    public $UniqueId;

    /**
     * @param AccountInfo $AccountInfo <p>Employee information</p>
     * @param string $AppId <p>Application business id</p>
     * @param string $AppName <p>Application name</p><p>Name when the operation log is triggered</p>
     * @param string $OperateTime <p>Operation time</p><p>Parameter format: timestamp in seconds</p>
     * @param string $Action <p>Operation type.</p>
     * @param string $Biz <p>Operation object.</p>
     * @param string $Content <p>Operation content</p>
     * @param string $UniqueId <p>Unique ID for the operation.</p>
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
        if (array_key_exists("AccountInfo",$param) and $param["AccountInfo"] !== null) {
            $this->AccountInfo = new AccountInfo();
            $this->AccountInfo->deserialize($param["AccountInfo"]);
        }

        if (array_key_exists("AppId",$param) and $param["AppId"] !== null) {
            $this->AppId = $param["AppId"];
        }

        if (array_key_exists("AppName",$param) and $param["AppName"] !== null) {
            $this->AppName = $param["AppName"];
        }

        if (array_key_exists("OperateTime",$param) and $param["OperateTime"] !== null) {
            $this->OperateTime = $param["OperateTime"];
        }

        if (array_key_exists("Action",$param) and $param["Action"] !== null) {
            $this->Action = $param["Action"];
        }

        if (array_key_exists("Biz",$param) and $param["Biz"] !== null) {
            $this->Biz = $param["Biz"];
        }

        if (array_key_exists("Content",$param) and $param["Content"] !== null) {
            $this->Content = $param["Content"];
        }

        if (array_key_exists("UniqueId",$param) and $param["UniqueId"] !== null) {
            $this->UniqueId = $param["UniqueId"];
        }
    }
}
