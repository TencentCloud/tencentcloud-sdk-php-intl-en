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
namespace TencentCloud\Mps\V20190612\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Screenshot information at the specified time point for on-demand files
 *
 * @method integer getDefinition() Obtain Specification for SnapshotByTimeOffset, please refer to the [SnapshotByTimeOffset parameter template](https://www.tencentcloud.com/document/product/266/33480?from_cn_redirect=1#.E6.97.B6.E9.97.B4.E7.82.B9.E6.88.AA.E5.9B.BE.E6.A8.A1.E6.9D.BF).
 * @method void setDefinition(integer $Definition) Set Specification for SnapshotByTimeOffset, please refer to the [SnapshotByTimeOffset parameter template](https://www.tencentcloud.com/document/product/266/33480?from_cn_redirect=1#.E6.97.B6.E9.97.B4.E7.82.B9.E6.88.AA.E5.9B.BE.E6.A8.A1.E6.9D.BF).
 * @method array getPicInfoSet() Obtain A screenshot information set of the same specification, each element represents a screenshot.
 * @method void setPicInfoSet(array $PicInfoSet) Set A screenshot information set of the same specification, each element represents a screenshot.
 * @method TaskOutputStorage getStorage() Obtain Storage location of the SnapshotByTimeOffset file.
 * @method void setStorage(TaskOutputStorage $Storage) Set Storage location of the SnapshotByTimeOffset file.
 */
class MediaSnapshotByTimeOffsetItem extends AbstractModel
{
    /**
     * @var integer Specification for SnapshotByTimeOffset, please refer to the [SnapshotByTimeOffset parameter template](https://www.tencentcloud.com/document/product/266/33480?from_cn_redirect=1#.E6.97.B6.E9.97.B4.E7.82.B9.E6.88.AA.E5.9B.BE.E6.A8.A1.E6.9D.BF).
     */
    public $Definition;

    /**
     * @var array A screenshot information set of the same specification, each element represents a screenshot.
     */
    public $PicInfoSet;

    /**
     * @var TaskOutputStorage Storage location of the SnapshotByTimeOffset file.
     */
    public $Storage;

    /**
     * @param integer $Definition Specification for SnapshotByTimeOffset, please refer to the [SnapshotByTimeOffset parameter template](https://www.tencentcloud.com/document/product/266/33480?from_cn_redirect=1#.E6.97.B6.E9.97.B4.E7.82.B9.E6.88.AA.E5.9B.BE.E6.A8.A1.E6.9D.BF).
     * @param array $PicInfoSet A screenshot information set of the same specification, each element represents a screenshot.
     * @param TaskOutputStorage $Storage Storage location of the SnapshotByTimeOffset file.
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
        if (array_key_exists("Definition",$param) and $param["Definition"] !== null) {
            $this->Definition = $param["Definition"];
        }

        if (array_key_exists("PicInfoSet",$param) and $param["PicInfoSet"] !== null) {
            $this->PicInfoSet = [];
            foreach ($param["PicInfoSet"] as $key => $value){
                $obj = new MediaSnapshotByTimePicInfoItem();
                $obj->deserialize($value);
                array_push($this->PicInfoSet, $obj);
            }
        }

        if (array_key_exists("Storage",$param) and $param["Storage"] !== null) {
            $this->Storage = new TaskOutputStorage();
            $this->Storage->deserialize($param["Storage"]);
        }
    }
}
