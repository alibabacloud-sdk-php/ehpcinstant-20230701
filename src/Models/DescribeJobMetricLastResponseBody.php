<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EhpcInstant\V20230701\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\EhpcInstant\V20230701\Models\DescribeJobMetricLastResponseBody\metrics;

class DescribeJobMetricLastResponseBody extends Model
{
    /**
     * @var metrics[]
     */
    public $metrics;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'metrics' => 'Metrics',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->metrics)) {
            Model::validateArray($this->metrics);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->metrics) {
            if (\is_array($this->metrics)) {
                $res['Metrics'] = [];
                $n1 = 0;
                foreach ($this->metrics as $item1) {
                    $res['Metrics'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Metrics'])) {
            if (!empty($map['Metrics'])) {
                $model->metrics = [];
                $n1 = 0;
                foreach ($map['Metrics'] as $item1) {
                    $model->metrics[$n1] = metrics::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
