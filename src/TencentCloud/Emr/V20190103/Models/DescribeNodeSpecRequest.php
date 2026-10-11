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
namespace TencentCloud\Emr\V20190103\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeNodeSpec request structure.
 *
 * @method integer getZoneId() Obtain <p>AZ ID. For more information, see https://document.capi.woa.com/document/api/1605/76892.</p>
 * @method void setZoneId(integer $ZoneId) Set <p>AZ ID. For more information, see https://document.capi.woa.com/document/api/1605/76892.</p>
 * @method integer getCvmPayMode() Obtain <p>0: pay-as-you-go; 1: yearly/monthly subscription; 99: pay-as-you-go and yearly/monthly subscription. Incorrect values will not display billing information.</p>
 * @method void setCvmPayMode(integer $CvmPayMode) Set <p>0: pay-as-you-go; 1: yearly/monthly subscription; 99: pay-as-you-go and yearly/monthly subscription. Incorrect values will not display billing information.</p>
 * @method string getNodeType() Obtain <p>Node type. Valid values: Master, Core, Task, Router, and All.</p>
 * @method void setNodeType(string $NodeType) Set <p>Node type. Valid values: Master, Core, Task, Router, and All.</p>
 * @method integer getTradeType() Obtain <p>0: old billing page; 1: new billing page. If incorrectly filled, the old billing page is used by default.</p>
 * @method void setTradeType(integer $TradeType) Set <p>0: old billing page; 1: new billing page. If incorrectly filled, the old billing page is used by default.</p>
 * @method integer getProductId() Obtain <p>Product ID. If not specified, the value is 0, indicating all product IDs. This parameter is required on the frontend.</p><p>44    EMR    V3.5.0<br>43    EMR    V3.4.0.tlinux<br>42    EMR    V2.7.0.tlinux<br>41    DRUID    V1.1.0<br>67    STARROCKS    V2.2.0<br>45    DRUID    V1.1.0.tlinux<br>40    EMRCLOUD    v3.2.0<br>47    EMR    V4.0.0<br>48    STARROCKS    V1.2.0<br>49    STARROCKS    V1.3.0<br>50    KAFKA    V2.0.0<br>51    STARROCKS    V1.4.0<br>52    EMR-TKE    V1.0.0<br>53    EMR    V3.6.0<br>54    STARROCKS    V2.0.0<br>55    EMR-TKE    V1.0.1<br>56    EMR-TKE    DLCV1.0.0<br>57    EMR    V2.8.0<br>58    EMR    V3.6.1<br>59    SERVERLESS    V1.0.0<br>60    EMR-TKE    V1.1.0<br>62    STARROCKS    V2.1.1<br>63    STARROCKS    V2.1.1.tlinux<br>64    EMR-TKE    TCCV1.0.0<br>65    EMR-TKE-AI    V1.0.0<br>66    RSS    V1.0.0<br>24    EMR    TianQiong-V1.0.0<br>3    EMR    V2.0.1.tlinux<br>4    EMR    V2.1.0<br>7    EMR    V3.0.0<br>8    EMR    V3.0.0.tlinux<br>9    EMR    V2.2.0<br>11    CLICKHOUSE    V1.0.0<br>12    CLICKHOUSE    V1.0.0.tlinux<br>16    EMR    V2.3.0<br>17    CLICKHOUSE    V1.1.0<br>18    CLICKHOUSE    V1.1.0.tlinux<br>19    EMR    V2.4.0<br>20    EMR    V2.5.0<br>21    USERCUSTOM    V1.0.0<br>22    CLICKHOUSE    V1.2.0<br>39    STARROCKS    V1.1.0<br>25    EMR    V3.1.0<br>26    DORIS    V1.0.0<br>27    KAFKA    V1.0.0<br>28    EMR    V3.2.0<br>29    EMR    V2.5.1<br>30    EMR    V2.6.0<br>32    DORIS    V1.1.0<br>33    EMR    V3.2.1<br>34    EMR    V3.3.0<br>35    DORIS    V1.2.0<br>36    STARROCKS    V1.0.0<br>37    EMR    V3.4.0<br>38    EMR    V2.7.0</p>
 * @method void setProductId(integer $ProductId) Set <p>Product ID. If not specified, the value is 0, indicating all product IDs. This parameter is required on the frontend.</p><p>44    EMR    V3.5.0<br>43    EMR    V3.4.0.tlinux<br>42    EMR    V2.7.0.tlinux<br>41    DRUID    V1.1.0<br>67    STARROCKS    V2.2.0<br>45    DRUID    V1.1.0.tlinux<br>40    EMRCLOUD    v3.2.0<br>47    EMR    V4.0.0<br>48    STARROCKS    V1.2.0<br>49    STARROCKS    V1.3.0<br>50    KAFKA    V2.0.0<br>51    STARROCKS    V1.4.0<br>52    EMR-TKE    V1.0.0<br>53    EMR    V3.6.0<br>54    STARROCKS    V2.0.0<br>55    EMR-TKE    V1.0.1<br>56    EMR-TKE    DLCV1.0.0<br>57    EMR    V2.8.0<br>58    EMR    V3.6.1<br>59    SERVERLESS    V1.0.0<br>60    EMR-TKE    V1.1.0<br>62    STARROCKS    V2.1.1<br>63    STARROCKS    V2.1.1.tlinux<br>64    EMR-TKE    TCCV1.0.0<br>65    EMR-TKE-AI    V1.0.0<br>66    RSS    V1.0.0<br>24    EMR    TianQiong-V1.0.0<br>3    EMR    V2.0.1.tlinux<br>4    EMR    V2.1.0<br>7    EMR    V3.0.0<br>8    EMR    V3.0.0.tlinux<br>9    EMR    V2.2.0<br>11    CLICKHOUSE    V1.0.0<br>12    CLICKHOUSE    V1.0.0.tlinux<br>16    EMR    V2.3.0<br>17    CLICKHOUSE    V1.1.0<br>18    CLICKHOUSE    V1.1.0.tlinux<br>19    EMR    V2.4.0<br>20    EMR    V2.5.0<br>21    USERCUSTOM    V1.0.0<br>22    CLICKHOUSE    V1.2.0<br>39    STARROCKS    V1.1.0<br>25    EMR    V3.1.0<br>26    DORIS    V1.0.0<br>27    KAFKA    V1.0.0<br>28    EMR    V3.2.0<br>29    EMR    V2.5.1<br>30    EMR    V2.6.0<br>32    DORIS    V1.1.0<br>33    EMR    V3.2.1<br>34    EMR    V3.3.0<br>35    DORIS    V1.2.0<br>36    STARROCKS    V1.0.0<br>37    EMR    V3.4.0<br>38    EMR    V2.7.0</p>
 * @method string getSceneName() Obtain <p>Scenario name.</p>
 * @method void setSceneName(string $SceneName) Set <p>Scenario name.</p>
 * @method string getResourceBaseType() Obtain <p>The type can be ComputeResource, EMR, or a default value. The default value is EMR.</p>
 * @method void setResourceBaseType(string $ResourceBaseType) Set <p>The type can be ComputeResource, EMR, or a default value. The default value is EMR.</p>
 * @method string getComputeResourceId() Obtain <p>Computing resource ID.</p>
 * @method void setComputeResourceId(string $ComputeResourceId) Set <p>Computing resource ID.</p>
 */
class DescribeNodeSpecRequest extends AbstractModel
{
    /**
     * @var integer <p>AZ ID. For more information, see https://document.capi.woa.com/document/api/1605/76892.</p>
     */
    public $ZoneId;

    /**
     * @var integer <p>0: pay-as-you-go; 1: yearly/monthly subscription; 99: pay-as-you-go and yearly/monthly subscription. Incorrect values will not display billing information.</p>
     */
    public $CvmPayMode;

    /**
     * @var string <p>Node type. Valid values: Master, Core, Task, Router, and All.</p>
     */
    public $NodeType;

    /**
     * @var integer <p>0: old billing page; 1: new billing page. If incorrectly filled, the old billing page is used by default.</p>
     */
    public $TradeType;

    /**
     * @var integer <p>Product ID. If not specified, the value is 0, indicating all product IDs. This parameter is required on the frontend.</p><p>44    EMR    V3.5.0<br>43    EMR    V3.4.0.tlinux<br>42    EMR    V2.7.0.tlinux<br>41    DRUID    V1.1.0<br>67    STARROCKS    V2.2.0<br>45    DRUID    V1.1.0.tlinux<br>40    EMRCLOUD    v3.2.0<br>47    EMR    V4.0.0<br>48    STARROCKS    V1.2.0<br>49    STARROCKS    V1.3.0<br>50    KAFKA    V2.0.0<br>51    STARROCKS    V1.4.0<br>52    EMR-TKE    V1.0.0<br>53    EMR    V3.6.0<br>54    STARROCKS    V2.0.0<br>55    EMR-TKE    V1.0.1<br>56    EMR-TKE    DLCV1.0.0<br>57    EMR    V2.8.0<br>58    EMR    V3.6.1<br>59    SERVERLESS    V1.0.0<br>60    EMR-TKE    V1.1.0<br>62    STARROCKS    V2.1.1<br>63    STARROCKS    V2.1.1.tlinux<br>64    EMR-TKE    TCCV1.0.0<br>65    EMR-TKE-AI    V1.0.0<br>66    RSS    V1.0.0<br>24    EMR    TianQiong-V1.0.0<br>3    EMR    V2.0.1.tlinux<br>4    EMR    V2.1.0<br>7    EMR    V3.0.0<br>8    EMR    V3.0.0.tlinux<br>9    EMR    V2.2.0<br>11    CLICKHOUSE    V1.0.0<br>12    CLICKHOUSE    V1.0.0.tlinux<br>16    EMR    V2.3.0<br>17    CLICKHOUSE    V1.1.0<br>18    CLICKHOUSE    V1.1.0.tlinux<br>19    EMR    V2.4.0<br>20    EMR    V2.5.0<br>21    USERCUSTOM    V1.0.0<br>22    CLICKHOUSE    V1.2.0<br>39    STARROCKS    V1.1.0<br>25    EMR    V3.1.0<br>26    DORIS    V1.0.0<br>27    KAFKA    V1.0.0<br>28    EMR    V3.2.0<br>29    EMR    V2.5.1<br>30    EMR    V2.6.0<br>32    DORIS    V1.1.0<br>33    EMR    V3.2.1<br>34    EMR    V3.3.0<br>35    DORIS    V1.2.0<br>36    STARROCKS    V1.0.0<br>37    EMR    V3.4.0<br>38    EMR    V2.7.0</p>
     */
    public $ProductId;

    /**
     * @var string <p>Scenario name.</p>
     */
    public $SceneName;

    /**
     * @var string <p>The type can be ComputeResource, EMR, or a default value. The default value is EMR.</p>
     */
    public $ResourceBaseType;

    /**
     * @var string <p>Computing resource ID.</p>
     */
    public $ComputeResourceId;

    /**
     * @param integer $ZoneId <p>AZ ID. For more information, see https://document.capi.woa.com/document/api/1605/76892.</p>
     * @param integer $CvmPayMode <p>0: pay-as-you-go; 1: yearly/monthly subscription; 99: pay-as-you-go and yearly/monthly subscription. Incorrect values will not display billing information.</p>
     * @param string $NodeType <p>Node type. Valid values: Master, Core, Task, Router, and All.</p>
     * @param integer $TradeType <p>0: old billing page; 1: new billing page. If incorrectly filled, the old billing page is used by default.</p>
     * @param integer $ProductId <p>Product ID. If not specified, the value is 0, indicating all product IDs. This parameter is required on the frontend.</p><p>44    EMR    V3.5.0<br>43    EMR    V3.4.0.tlinux<br>42    EMR    V2.7.0.tlinux<br>41    DRUID    V1.1.0<br>67    STARROCKS    V2.2.0<br>45    DRUID    V1.1.0.tlinux<br>40    EMRCLOUD    v3.2.0<br>47    EMR    V4.0.0<br>48    STARROCKS    V1.2.0<br>49    STARROCKS    V1.3.0<br>50    KAFKA    V2.0.0<br>51    STARROCKS    V1.4.0<br>52    EMR-TKE    V1.0.0<br>53    EMR    V3.6.0<br>54    STARROCKS    V2.0.0<br>55    EMR-TKE    V1.0.1<br>56    EMR-TKE    DLCV1.0.0<br>57    EMR    V2.8.0<br>58    EMR    V3.6.1<br>59    SERVERLESS    V1.0.0<br>60    EMR-TKE    V1.1.0<br>62    STARROCKS    V2.1.1<br>63    STARROCKS    V2.1.1.tlinux<br>64    EMR-TKE    TCCV1.0.0<br>65    EMR-TKE-AI    V1.0.0<br>66    RSS    V1.0.0<br>24    EMR    TianQiong-V1.0.0<br>3    EMR    V2.0.1.tlinux<br>4    EMR    V2.1.0<br>7    EMR    V3.0.0<br>8    EMR    V3.0.0.tlinux<br>9    EMR    V2.2.0<br>11    CLICKHOUSE    V1.0.0<br>12    CLICKHOUSE    V1.0.0.tlinux<br>16    EMR    V2.3.0<br>17    CLICKHOUSE    V1.1.0<br>18    CLICKHOUSE    V1.1.0.tlinux<br>19    EMR    V2.4.0<br>20    EMR    V2.5.0<br>21    USERCUSTOM    V1.0.0<br>22    CLICKHOUSE    V1.2.0<br>39    STARROCKS    V1.1.0<br>25    EMR    V3.1.0<br>26    DORIS    V1.0.0<br>27    KAFKA    V1.0.0<br>28    EMR    V3.2.0<br>29    EMR    V2.5.1<br>30    EMR    V2.6.0<br>32    DORIS    V1.1.0<br>33    EMR    V3.2.1<br>34    EMR    V3.3.0<br>35    DORIS    V1.2.0<br>36    STARROCKS    V1.0.0<br>37    EMR    V3.4.0<br>38    EMR    V2.7.0</p>
     * @param string $SceneName <p>Scenario name.</p>
     * @param string $ResourceBaseType <p>The type can be ComputeResource, EMR, or a default value. The default value is EMR.</p>
     * @param string $ComputeResourceId <p>Computing resource ID.</p>
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
        if (array_key_exists("ZoneId",$param) and $param["ZoneId"] !== null) {
            $this->ZoneId = $param["ZoneId"];
        }

        if (array_key_exists("CvmPayMode",$param) and $param["CvmPayMode"] !== null) {
            $this->CvmPayMode = $param["CvmPayMode"];
        }

        if (array_key_exists("NodeType",$param) and $param["NodeType"] !== null) {
            $this->NodeType = $param["NodeType"];
        }

        if (array_key_exists("TradeType",$param) and $param["TradeType"] !== null) {
            $this->TradeType = $param["TradeType"];
        }

        if (array_key_exists("ProductId",$param) and $param["ProductId"] !== null) {
            $this->ProductId = $param["ProductId"];
        }

        if (array_key_exists("SceneName",$param) and $param["SceneName"] !== null) {
            $this->SceneName = $param["SceneName"];
        }

        if (array_key_exists("ResourceBaseType",$param) and $param["ResourceBaseType"] !== null) {
            $this->ResourceBaseType = $param["ResourceBaseType"];
        }

        if (array_key_exists("ComputeResourceId",$param) and $param["ComputeResourceId"] !== null) {
            $this->ComputeResourceId = $param["ComputeResourceId"];
        }
    }
}
