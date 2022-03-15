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
namespace TencentCloud\Eb\V20210416\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Transformer
 *
 * @method Extraction getExtraction() Obtain Describes how to extract data
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setExtraction(Extraction $Extraction) Set Describes how to extract data
Note: this field may return null, indicating that no valid values can be obtained.
 * @method EtlFilter getEtlFilter() Obtain Describes how to filter data
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setEtlFilter(EtlFilter $EtlFilter) Set Describes how to filter data
Note: this field may return null, indicating that no valid values can be obtained.
 * @method Transform getTransform() Obtain Describes how to transform data
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setTransform(Transform $Transform) Set Describes how to transform data
Note: this field may return null, indicating that no valid values can be obtained.
 */
class Transformation extends AbstractModel
{
    /**
     * @var Extraction Describes how to extract data
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $Extraction;

    /**
     * @var EtlFilter Describes how to filter data
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $EtlFilter;

    /**
     * @var Transform Describes how to transform data
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $Transform;

    /**
     * @param Extraction $Extraction Describes how to extract data
Note: this field may return null, indicating that no valid values can be obtained.
     * @param EtlFilter $EtlFilter Describes how to filter data
Note: this field may return null, indicating that no valid values can be obtained.
     * @param Transform $Transform Describes how to transform data
Note: this field may return null, indicating that no valid values can be obtained.
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
        if (array_key_exists("Extraction",$param) and $param["Extraction"] !== null) {
            $this->Extraction = new Extraction();
            $this->Extraction->deserialize($param["Extraction"]);
        }

        if (array_key_exists("EtlFilter",$param) and $param["EtlFilter"] !== null) {
            $this->EtlFilter = new EtlFilter();
            $this->EtlFilter->deserialize($param["EtlFilter"]);
        }

        if (array_key_exists("Transform",$param) and $param["Transform"] !== null) {
            $this->Transform = new Transform();
            $this->Transform->deserialize($param["Transform"]);
        }
    }
}
