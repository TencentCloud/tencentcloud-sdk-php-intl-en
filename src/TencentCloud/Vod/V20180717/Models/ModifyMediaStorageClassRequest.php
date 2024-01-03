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
namespace TencentCloud\Vod\V20180717\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyMediaStorageClass request structure.
 *
 * @method array getFileIds() Obtain Media file unique identifier list, maximum length: 100.
 * @method void setFileIds(array $FileIds) Set Media file unique identifier list, maximum length: 100.
 * @method string getStorageClass() Obtain The target storage class. Valid values:
<li>STANDARD</li>
<li>STANDARD_IA</li>
<li>ARCHIVE</li>
<li>DEEP_ARCHIVE</li>
 * @method void setStorageClass(string $StorageClass) Set The target storage class. Valid values:
<li>STANDARD</li>
<li>STANDARD_IA</li>
<li>ARCHIVE</li>
<li>DEEP_ARCHIVE</li>
 * @method integer getSubAppId() Obtain <b>The VOD [application](https://intl.cloud.tencent.com/document/product/266/14574) ID. For customers who activate VOD service from December 25, 2023, if they want to access resources in a VOD application (whether it's the default application or a newly created one), they must fill in this field with the application ID.</b>
 * @method void setSubAppId(integer $SubAppId) Set <b>The VOD [application](https://intl.cloud.tencent.com/document/product/266/14574) ID. For customers who activate VOD service from December 25, 2023, if they want to access resources in a VOD application (whether it's the default application or a newly created one), they must fill in this field with the application ID.</b>
 * @method string getRestoreTier() Obtain The retrieval mode. When switching files from DEEP ARCHIVE or ARCHIVE to STANDARD, you need to specify the retrieval mode. For details, see [Data retrieval and retrieval mode](https://intl.cloud.tencent.com/document/product/266/43051#data-retrieval-and-retrieval-mode.3Ca-id.3D.22retake.22.3E.3C.2Fa.3E).
If the current storage class is ARCHIVE, the valid values for this parameter are as follows:
<li>Expedited</li>
<li>Standard</li>
<li>Bulk</li>
If the current storage class is DEEP ARCHIVE, the valid values for this parameter are as follows:
<li>Standard</li>
<li>Bulk</li>
 * @method void setRestoreTier(string $RestoreTier) Set The retrieval mode. When switching files from DEEP ARCHIVE or ARCHIVE to STANDARD, you need to specify the retrieval mode. For details, see [Data retrieval and retrieval mode](https://intl.cloud.tencent.com/document/product/266/43051#data-retrieval-and-retrieval-mode.3Ca-id.3D.22retake.22.3E.3C.2Fa.3E).
If the current storage class is ARCHIVE, the valid values for this parameter are as follows:
<li>Expedited</li>
<li>Standard</li>
<li>Bulk</li>
If the current storage class is DEEP ARCHIVE, the valid values for this parameter are as follows:
<li>Standard</li>
<li>Bulk</li>
 */
class ModifyMediaStorageClassRequest extends AbstractModel
{
    /**
     * @var array Media file unique identifier list, maximum length: 100.
     */
    public $FileIds;

    /**
     * @var string The target storage class. Valid values:
<li>STANDARD</li>
<li>STANDARD_IA</li>
<li>ARCHIVE</li>
<li>DEEP_ARCHIVE</li>
     */
    public $StorageClass;

    /**
     * @var integer <b>The VOD [application](https://intl.cloud.tencent.com/document/product/266/14574) ID. For customers who activate VOD service from December 25, 2023, if they want to access resources in a VOD application (whether it's the default application or a newly created one), they must fill in this field with the application ID.</b>
     */
    public $SubAppId;

    /**
     * @var string The retrieval mode. When switching files from DEEP ARCHIVE or ARCHIVE to STANDARD, you need to specify the retrieval mode. For details, see [Data retrieval and retrieval mode](https://intl.cloud.tencent.com/document/product/266/43051#data-retrieval-and-retrieval-mode.3Ca-id.3D.22retake.22.3E.3C.2Fa.3E).
If the current storage class is ARCHIVE, the valid values for this parameter are as follows:
<li>Expedited</li>
<li>Standard</li>
<li>Bulk</li>
If the current storage class is DEEP ARCHIVE, the valid values for this parameter are as follows:
<li>Standard</li>
<li>Bulk</li>
     */
    public $RestoreTier;

    /**
     * @param array $FileIds Media file unique identifier list, maximum length: 100.
     * @param string $StorageClass The target storage class. Valid values:
<li>STANDARD</li>
<li>STANDARD_IA</li>
<li>ARCHIVE</li>
<li>DEEP_ARCHIVE</li>
     * @param integer $SubAppId <b>The VOD [application](https://intl.cloud.tencent.com/document/product/266/14574) ID. For customers who activate VOD service from December 25, 2023, if they want to access resources in a VOD application (whether it's the default application or a newly created one), they must fill in this field with the application ID.</b>
     * @param string $RestoreTier The retrieval mode. When switching files from DEEP ARCHIVE or ARCHIVE to STANDARD, you need to specify the retrieval mode. For details, see [Data retrieval and retrieval mode](https://intl.cloud.tencent.com/document/product/266/43051#data-retrieval-and-retrieval-mode.3Ca-id.3D.22retake.22.3E.3C.2Fa.3E).
If the current storage class is ARCHIVE, the valid values for this parameter are as follows:
<li>Expedited</li>
<li>Standard</li>
<li>Bulk</li>
If the current storage class is DEEP ARCHIVE, the valid values for this parameter are as follows:
<li>Standard</li>
<li>Bulk</li>
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
        if (array_key_exists("FileIds",$param) and $param["FileIds"] !== null) {
            $this->FileIds = $param["FileIds"];
        }

        if (array_key_exists("StorageClass",$param) and $param["StorageClass"] !== null) {
            $this->StorageClass = $param["StorageClass"];
        }

        if (array_key_exists("SubAppId",$param) and $param["SubAppId"] !== null) {
            $this->SubAppId = $param["SubAppId"];
        }

        if (array_key_exists("RestoreTier",$param) and $param["RestoreTier"] !== null) {
            $this->RestoreTier = $param["RestoreTier"];
        }
    }
}
