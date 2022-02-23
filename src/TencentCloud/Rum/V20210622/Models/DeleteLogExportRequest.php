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
namespace TencentCloud\Rum\V20210622\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DeleteLogExport request structure.
 *
 * @method integer getID() Obtain Project ID
 * @method void setID(integer $ID) Set Project ID
 * @method string getExportID() Obtain Log export ID
 * @method void setExportID(string $ExportID) Set Log export ID
 */
class DeleteLogExportRequest extends AbstractModel
{
    /**
     * @var integer Project ID
     */
    public $ID;

    /**
     * @var string Log export ID
     */
    public $ExportID;

    /**
     * @param integer $ID Project ID
     * @param string $ExportID Log export ID
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
        if (array_key_exists("ID",$param) and $param["ID"] !== null) {
            $this->ID = $param["ID"];
        }

        if (array_key_exists("ExportID",$param) and $param["ExportID"] !== null) {
            $this->ExportID = $param["ExportID"];
        }
    }
}
