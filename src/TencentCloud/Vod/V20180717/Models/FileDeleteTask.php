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
 * File deletion task
 *
 * @method array getFileIdSet() Obtain <p>List of file IDs to delete.</p>
 * @method void setFileIdSet(array $FileIdSet) Set <p>List of file IDs to delete.</p>
 * @method array getFileDeleteResultInfo() Obtain <p>List of result information for deleting files.</p>
 * @method void setFileDeleteResultInfo(array $FileDeleteResultInfo) Set <p>List of result information for deleting files.</p>
 */
class FileDeleteTask extends AbstractModel
{
    /**
     * @var array <p>List of file IDs to delete.</p>
     */
    public $FileIdSet;

    /**
     * @var array <p>List of result information for deleting files.</p>
     */
    public $FileDeleteResultInfo;

    /**
     * @param array $FileIdSet <p>List of file IDs to delete.</p>
     * @param array $FileDeleteResultInfo <p>List of result information for deleting files.</p>
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
        if (array_key_exists("FileIdSet",$param) and $param["FileIdSet"] !== null) {
            $this->FileIdSet = $param["FileIdSet"];
        }

        if (array_key_exists("FileDeleteResultInfo",$param) and $param["FileDeleteResultInfo"] !== null) {
            $this->FileDeleteResultInfo = [];
            foreach ($param["FileDeleteResultInfo"] as $key => $value){
                $obj = new FileDeleteResultItem();
                $obj->deserialize($value);
                array_push($this->FileDeleteResultInfo, $obj);
            }
        }
    }
}
