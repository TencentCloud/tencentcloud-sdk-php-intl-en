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
 * Video splicing task information. This structure is only used for tasks initiated via the 2017 [video splicing](https://www.tencentcloud.com/document/product/266/7821?from_cn_redirect=1) API.
 *
 * @method string getTaskId() Obtain Video splicing task ID.
 * @method void setTaskId(string $TaskId) Set Video splicing task ID.
 * @method array getFileInfoSet() Obtain Source file information for video splicing.
 * @method void setFileInfoSet(array $FileInfoSet) Set Source file information for video splicing.
 */
class ConcatTask2017 extends AbstractModel
{
    /**
     * @var string Video splicing task ID.
     */
    public $TaskId;

    /**
     * @var array Source file information for video splicing.
     */
    public $FileInfoSet;

    /**
     * @param string $TaskId Video splicing task ID.
     * @param array $FileInfoSet Source file information for video splicing.
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
        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            $this->TaskId = $param["TaskId"];
        }

        if (array_key_exists("FileInfoSet",$param) and $param["FileInfoSet"] !== null) {
            $this->FileInfoSet = [];
            foreach ($param["FileInfoSet"] as $key => $value){
                $obj = new ConcatFileInfo2017();
                $obj->deserialize($value);
                array_push($this->FileInfoSet, $obj);
            }
        }
    }
}
