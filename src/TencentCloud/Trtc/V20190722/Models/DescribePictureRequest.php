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
namespace TencentCloud\Trtc\V20190722\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribePicture request structure.
 *
 * @method integer getSdkAppId() Obtain Application ID
 * @method void setSdkAppId(integer $SdkAppId) Set Application ID
 * @method integer getPictureId() Obtain Image ID. If it is not passed in, the IDs of all images under the application are returned.
 * @method void setPictureId(integer $PictureId) Set Image ID. If it is not passed in, the IDs of all images under the application are returned.
 * @method integer getPageSize() Obtain Number of records per page
 * @method void setPageSize(integer $PageSize) Set Number of records per page
 * @method integer getPageNo() Obtain Page number
 * @method void setPageNo(integer $PageNo) Set Page number
 */
class DescribePictureRequest extends AbstractModel
{
    /**
     * @var integer Application ID
     */
    public $SdkAppId;

    /**
     * @var integer Image ID. If it is not passed in, the IDs of all images under the application are returned.
     */
    public $PictureId;

    /**
     * @var integer Number of records per page
     */
    public $PageSize;

    /**
     * @var integer Page number
     */
    public $PageNo;

    /**
     * @param integer $SdkAppId Application ID
     * @param integer $PictureId Image ID. If it is not passed in, the IDs of all images under the application are returned.
     * @param integer $PageSize Number of records per page
     * @param integer $PageNo Page number
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
        if (array_key_exists("SdkAppId",$param) and $param["SdkAppId"] !== null) {
            $this->SdkAppId = $param["SdkAppId"];
        }

        if (array_key_exists("PictureId",$param) and $param["PictureId"] !== null) {
            $this->PictureId = $param["PictureId"];
        }

        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            $this->PageSize = $param["PageSize"];
        }

        if (array_key_exists("PageNo",$param) and $param["PageNo"] !== null) {
            $this->PageNo = $param["PageNo"];
        }
    }
}
