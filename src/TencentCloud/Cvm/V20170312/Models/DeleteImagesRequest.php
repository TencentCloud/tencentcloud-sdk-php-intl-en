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
namespace TencentCloud\Cvm\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DeleteImages request structure.
 *
 * @method array getImageIds() Obtain List of the IDs of the instances to be deleted.
 * @method void setImageIds(array $ImageIds) Set List of the IDs of the instances to be deleted.
 * @method boolean getDeleteBindedSnap() Obtain Whether to delete the snapshot associated with the image
 * @method void setDeleteBindedSnap(boolean $DeleteBindedSnap) Set Whether to delete the snapshot associated with the image
 * @method boolean getDryRun() Obtain Check whether deleting an image is supported
 * @method void setDryRun(boolean $DryRun) Set Check whether deleting an image is supported
 */
class DeleteImagesRequest extends AbstractModel
{
    /**
     * @var array List of the IDs of the instances to be deleted.
     */
    public $ImageIds;

    /**
     * @var boolean Whether to delete the snapshot associated with the image
     */
    public $DeleteBindedSnap;

    /**
     * @var boolean Check whether deleting an image is supported
     */
    public $DryRun;

    /**
     * @param array $ImageIds List of the IDs of the instances to be deleted.
     * @param boolean $DeleteBindedSnap Whether to delete the snapshot associated with the image
     * @param boolean $DryRun Check whether deleting an image is supported
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
        if (array_key_exists("ImageIds",$param) and $param["ImageIds"] !== null) {
            $this->ImageIds = $param["ImageIds"];
        }

        if (array_key_exists("DeleteBindedSnap",$param) and $param["DeleteBindedSnap"] !== null) {
            $this->DeleteBindedSnap = $param["DeleteBindedSnap"];
        }

        if (array_key_exists("DryRun",$param) and $param["DryRun"] !== null) {
            $this->DryRun = $param["DryRun"];
        }
    }
}
