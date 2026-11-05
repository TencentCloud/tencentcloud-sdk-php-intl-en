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
 * SaveWorkflowDebugContext request structure.
 *
 * @method string getAppId() Obtain <p>Application ID.</p>
 * @method void setAppId(string $AppId) Set <p>Application ID.</p>
 * @method array getAppVariableValueList() Obtain <p>Application variable list.</p>
 * @method void setAppVariableValueList(array $AppVariableValueList) Set <p>Application variable list.</p>
 * @method string getSessionId() Obtain <p>Session ID</p>
 * @method void setSessionId(string $SessionId) Set <p>Session ID</p>
 * @method string getUserId() Obtain <p>Custom user ID</p>
 * @method void setUserId(string $UserId) Set <p>Custom user ID</p>
 */
class SaveWorkflowDebugContextRequest extends AbstractModel
{
    /**
     * @var string <p>Application ID.</p>
     */
    public $AppId;

    /**
     * @var array <p>Application variable list.</p>
     */
    public $AppVariableValueList;

    /**
     * @var string <p>Session ID</p>
     */
    public $SessionId;

    /**
     * @var string <p>Custom user ID</p>
     */
    public $UserId;

    /**
     * @param string $AppId <p>Application ID.</p>
     * @param array $AppVariableValueList <p>Application variable list.</p>
     * @param string $SessionId <p>Session ID</p>
     * @param string $UserId <p>Custom user ID</p>
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
        if (array_key_exists("AppId",$param) and $param["AppId"] !== null) {
            $this->AppId = $param["AppId"];
        }

        if (array_key_exists("AppVariableValueList",$param) and $param["AppVariableValueList"] !== null) {
            $this->AppVariableValueList = [];
            foreach ($param["AppVariableValueList"] as $key => $value){
                $obj = new AppVariableValue();
                $obj->deserialize($value);
                array_push($this->AppVariableValueList, $obj);
            }
        }

        if (array_key_exists("SessionId",$param) and $param["SessionId"] !== null) {
            $this->SessionId = $param["SessionId"];
        }

        if (array_key_exists("UserId",$param) and $param["UserId"] !== null) {
            $this->UserId = $param["UserId"];
        }
    }
}
