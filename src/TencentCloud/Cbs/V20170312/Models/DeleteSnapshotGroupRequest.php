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
namespace TencentCloud\Cbs\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DeleteSnapshotGroup request structure.
 *
 * @method string getSnapshotGroupId() Obtain Specifies the snapshot group ID.
 * @method void setSnapshotGroupId(string $SnapshotGroupId) Set Specifies the snapshot group ID.
 * @method array getSnapshotGroupIds() Obtain List of snapshot group ids. this parameter and the snapshot group ID must provide at least one. if both are provided, they will be merged with the snapshot group ID.
 * @method void setSnapshotGroupIds(array $SnapshotGroupIds) Set List of snapshot group ids. this parameter and the snapshot group ID must provide at least one. if both are provided, they will be merged with the snapshot group ID.
 * @method boolean getDeleteBindImages() Obtain Specifies whether to delete the image associated with the snapshot group at the same time. valid values: set to false (not delete the image bound to the snapshot group; at this point, if the snapshot group has bound images, deletion will fail) or set to true (delete the image bound to the snapshot group simultaneously). default value is false.
 * @method void setDeleteBindImages(boolean $DeleteBindImages) Set Specifies whether to delete the image associated with the snapshot group at the same time. valid values: set to false (not delete the image bound to the snapshot group; at this point, if the snapshot group has bound images, deletion will fail) or set to true (delete the image bound to the snapshot group simultaneously). default value is false.
 */
class DeleteSnapshotGroupRequest extends AbstractModel
{
    /**
     * @var string Specifies the snapshot group ID.
     */
    public $SnapshotGroupId;

    /**
     * @var array List of snapshot group ids. this parameter and the snapshot group ID must provide at least one. if both are provided, they will be merged with the snapshot group ID.
     */
    public $SnapshotGroupIds;

    /**
     * @var boolean Specifies whether to delete the image associated with the snapshot group at the same time. valid values: set to false (not delete the image bound to the snapshot group; at this point, if the snapshot group has bound images, deletion will fail) or set to true (delete the image bound to the snapshot group simultaneously). default value is false.
     */
    public $DeleteBindImages;

    /**
     * @param string $SnapshotGroupId Specifies the snapshot group ID.
     * @param array $SnapshotGroupIds List of snapshot group ids. this parameter and the snapshot group ID must provide at least one. if both are provided, they will be merged with the snapshot group ID.
     * @param boolean $DeleteBindImages Specifies whether to delete the image associated with the snapshot group at the same time. valid values: set to false (not delete the image bound to the snapshot group; at this point, if the snapshot group has bound images, deletion will fail) or set to true (delete the image bound to the snapshot group simultaneously). default value is false.
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
        if (array_key_exists("SnapshotGroupId",$param) and $param["SnapshotGroupId"] !== null) {
            $this->SnapshotGroupId = $param["SnapshotGroupId"];
        }

        if (array_key_exists("SnapshotGroupIds",$param) and $param["SnapshotGroupIds"] !== null) {
            $this->SnapshotGroupIds = $param["SnapshotGroupIds"];
        }

        if (array_key_exists("DeleteBindImages",$param) and $param["DeleteBindImages"] !== null) {
            $this->DeleteBindImages = $param["DeleteBindImages"];
        }
    }
}
