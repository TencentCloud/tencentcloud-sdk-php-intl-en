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
 * Used by BatchCreateTaskVersion, describes task information
 *
 * @method string getTaskId() Obtain Task IDNote: This field may return null, indicating that no valid value can be obtained.
 * @method void setTaskId(string $TaskId) Set Task IDNote: This field may return null, indicating that no valid value can be obtained.
 * @method string getVersionRemark() Obtain VersionRemark
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setVersionRemark(string $VersionRemark) Set VersionRemark
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getFolderId() Obtain Folder ID
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setFolderId(string $FolderId) Set Folder ID
Note: This field may return null, indicating that no valid value can be obtained.
 */
class BatchCreateTaskVersionDTO extends AbstractModel
{
    /**
     * @var string Task IDNote: This field may return null, indicating that no valid value can be obtained.
     */
    public $TaskId;

    /**
     * @var string VersionRemark
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $VersionRemark;

    /**
     * @var string Folder ID
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $FolderId;

    /**
     * @param string $TaskId Task IDNote: This field may return null, indicating that no valid value can be obtained.
     * @param string $VersionRemark VersionRemark
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $FolderId Folder ID
Note: This field may return null, indicating that no valid value can be obtained.
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

        if (array_key_exists("VersionRemark",$param) and $param["VersionRemark"] !== null) {
            $this->VersionRemark = $param["VersionRemark"];
        }

        if (array_key_exists("FolderId",$param) and $param["FolderId"] !== null) {
            $this->FolderId = $param["FolderId"];
        }
    }
}
