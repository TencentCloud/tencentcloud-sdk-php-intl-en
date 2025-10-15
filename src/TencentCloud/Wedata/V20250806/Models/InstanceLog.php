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
namespace TencentCloud\Wedata\V20250806\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Instance log content.
 *
 * @method string getInstanceKey() Obtain Instance unique id.

 * @method void setInstanceKey(string $InstanceKey) Set Instance unique id.

 * @method string getProjectId() Obtain Project ID.


 * @method void setProjectId(string $ProjectId) Set Project ID.


 * @method string getCodeContent() Obtain Specifies the code content to run.

 * @method void setCodeContent(string $CodeContent) Set Specifies the code content to run.

 * @method string getLogInfo() Obtain log information

 * @method void setLogInfo(string $LogInfo) Set log information

 * @method string getNextCursor() Obtain Used for paginated log queries; has no specific business meaning.

For the first query, set the value to null.

For subsequent queries, use the NextCursor value returned from the previous query.
 * @method void setNextCursor(string $NextCursor) Set Used for paginated log queries; has no specific business meaning.

For the first query, set the value to null.

For subsequent queries, use the NextCursor value returned from the previous query.
 */
class InstanceLog extends AbstractModel
{
    /**
     * @var string Instance unique id.

     */
    public $InstanceKey;

    /**
     * @var string Project ID.


     */
    public $ProjectId;

    /**
     * @var string Specifies the code content to run.

     */
    public $CodeContent;

    /**
     * @var string log information

     */
    public $LogInfo;

    /**
     * @var string Used for paginated log queries; has no specific business meaning.

For the first query, set the value to null.

For subsequent queries, use the NextCursor value returned from the previous query.
     */
    public $NextCursor;

    /**
     * @param string $InstanceKey Instance unique id.

     * @param string $ProjectId Project ID.


     * @param string $CodeContent Specifies the code content to run.

     * @param string $LogInfo log information

     * @param string $NextCursor Used for paginated log queries; has no specific business meaning.

For the first query, set the value to null.

For subsequent queries, use the NextCursor value returned from the previous query.
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
        if (array_key_exists("InstanceKey",$param) and $param["InstanceKey"] !== null) {
            $this->InstanceKey = $param["InstanceKey"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("CodeContent",$param) and $param["CodeContent"] !== null) {
            $this->CodeContent = $param["CodeContent"];
        }

        if (array_key_exists("LogInfo",$param) and $param["LogInfo"] !== null) {
            $this->LogInfo = $param["LogInfo"];
        }

        if (array_key_exists("NextCursor",$param) and $param["NextCursor"] !== null) {
            $this->NextCursor = $param["NextCursor"];
        }
    }
}
