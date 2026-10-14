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
 * Screenshot information of a VOD file at the specified time point
 *
 * @method integer getDefinition() Obtain SnapshotByTimeOffset specification. See SnapshotByTimeOffset parameter template.
 * @method void setDefinition(integer $Definition) Set SnapshotByTimeOffset specification. See SnapshotByTimeOffset parameter template.
 * @method array getPicInfoSet() Obtain Screenshot information set of the same specification, where each element represents a screenshot.
 * @method void setPicInfoSet(array $PicInfoSet) Set Screenshot information set of the same specification, where each element represents a screenshot.
 * @method TaskOutputStorage getStorage() Obtain Storage location of the time point screenshot file.
 * @method void setStorage(TaskOutputStorage $Storage) Set Storage location of the time point screenshot file.
 */
class MediaSnapshotByTimeOffsetItem extends AbstractModel
{
    /**
     * @var integer SnapshotByTimeOffset specification. See SnapshotByTimeOffset parameter template.
     */
    public $Definition;

    /**
     * @var array Screenshot information set of the same specification, where each element represents a screenshot.
     */
    public $PicInfoSet;

    /**
     * @var TaskOutputStorage Storage location of the time point screenshot file.
     */
    public $Storage;

    /**
     * @param integer $Definition SnapshotByTimeOffset specification. See SnapshotByTimeOffset parameter template.
     * @param array $PicInfoSet Screenshot information set of the same specification, where each element represents a screenshot.
     * @param TaskOutputStorage $Storage Storage location of the time point screenshot file.
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
