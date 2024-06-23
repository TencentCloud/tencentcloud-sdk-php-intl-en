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
namespace TencentCloud\Wedata\V20210820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * UploadContent request structure.
 *
 * @method ScriptRequestInfo getScriptRequestInfo() Obtain Script Upload Information
 * @method void setScriptRequestInfo(ScriptRequestInfo $ScriptRequestInfo) Set Script Upload Information
 * @method string getRequestFromSource() Obtain Request Source, WEB frontend; CLIENT client
 * @method void setRequestFromSource(string $RequestFromSource) Set Request Source, WEB frontend; CLIENT client
 * @method string getProjectId() Obtain Project ID
 * @method void setProjectId(string $ProjectId) Set Project ID
 */
class UploadContentRequest extends AbstractModel
{
    /**
     * @var ScriptRequestInfo Script Upload Information
     */
    public $ScriptRequestInfo;

    /**
     * @var string Request Source, WEB frontend; CLIENT client
     */
    public $RequestFromSource;

    /**
     * @var string Project ID
     */
    public $ProjectId;

    /**
     * @param ScriptRequestInfo $ScriptRequestInfo Script Upload Information
     * @param string $RequestFromSource Request Source, WEB frontend; CLIENT client
     * @param string $ProjectId Project ID
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
        if (array_key_exists("ScriptRequestInfo",$param) and $param["ScriptRequestInfo"] !== null) {
            $this->ScriptRequestInfo = new ScriptRequestInfo();
            $this->ScriptRequestInfo->deserialize($param["ScriptRequestInfo"]);
        }

        if (array_key_exists("RequestFromSource",$param) and $param["RequestFromSource"] !== null) {
            $this->RequestFromSource = $param["RequestFromSource"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }
    }
}
