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
 * Video screenshot at specified time point task information. This structure is only used for tasks initiated by the 2017 version [SnapshotByTimeOffset](https://www.tencentcloud.com/document/product/266/8102?from_cn_redirect=1) API.
 *
 * @method string getTaskId() Obtain Screenshot job ID.
 * @method void setTaskId(string $TaskId) Set Screenshot job ID.
 * @method string getFileId() Obtain Screenshot file ID.
 * @method void setFileId(string $FileId) Set Screenshot file ID.
 * @method integer getDefinition() Obtain Screenshot specification. See [SnapshotByTimeOffset parameter template](https://www.tencentcloud.com/document/product/266/33480?from_cn_redirect=1#.E6.97.B6.E9.97.B4.E7.82.B9.E6.88.AA.E5.9B.BE.E6.A8.A1.E6.9D.BF).
 * @method void setDefinition(integer $Definition) Set Screenshot specification. See [SnapshotByTimeOffset parameter template](https://www.tencentcloud.com/document/product/266/33480?from_cn_redirect=1#.E6.97.B6.E9.97.B4.E7.82.B9.E6.88.AA.E5.9B.BE.E6.A8.A1.E6.9D.BF).
 * @method array getSnapshotInfoSet() Obtain Screenshot result info.
 * @method void setSnapshotInfoSet(array $SnapshotInfoSet) Set Screenshot result info.
 */
class SnapshotByTimeOffsetTask2017 extends AbstractModel
{
    /**
     * @var string Screenshot job ID.
     */
    public $TaskId;

    /**
     * @var string Screenshot file ID.
     */
    public $FileId;

    /**
     * @var integer Screenshot specification. See [SnapshotByTimeOffset parameter template](https://www.tencentcloud.com/document/product/266/33480?from_cn_redirect=1#.E6.97.B6.E9.97.B4.E7.82.B9.E6.88.AA.E5.9B.BE.E6.A8.A1.E6.9D.BF).
     */
    public $Definition;

    /**
     * @var array Screenshot result info.
     */
    public $SnapshotInfoSet;

    /**
     * @param string $TaskId Screenshot job ID.
     * @param string $FileId Screenshot file ID.
     * @param integer $Definition Screenshot specification. See [SnapshotByTimeOffset parameter template](https://www.tencentcloud.com/document/product/266/33480?from_cn_redirect=1#.E6.97.B6.E9.97.B4.E7.82.B9.E6.88.AA.E5.9B.BE.E6.A8.A1.E6.9D.BF).
     * @param array $SnapshotInfoSet Screenshot result info.
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

        if (array_key_exists("FileId",$param) and $param["FileId"] !== null) {
            $this->FileId = $param["FileId"];
        }

        if (array_key_exists("Definition",$param) and $param["Definition"] !== null) {
            $this->Definition = $param["Definition"];
        }

        if (array_key_exists("SnapshotInfoSet",$param) and $param["SnapshotInfoSet"] !== null) {
            $this->SnapshotInfoSet = [];
            foreach ($param["SnapshotInfoSet"] as $key => $value){
                $obj = new SnapshotByTimeOffset2017();
                $obj->deserialize($value);
                array_push($this->SnapshotInfoSet, $obj);
            }
        }
    }
}
